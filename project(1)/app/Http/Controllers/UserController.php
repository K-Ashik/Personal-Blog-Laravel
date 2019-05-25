<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserUpdate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Charts\DashboardChart;
use Illuminate\Support\Carbon;
use App\Comment;
class UserController extends Controller
{
    public function dashboard(){
        $chart = new DashboardChart;
        $days = $this->generateDateRange(Carbon::now()->subDays(30), Carbon::now());
        $comments=[];
        foreach($days as $day){
           $comments[]=  Comment::whereDate('created_at', $day)
                ->where('user_id', Auth::id())->count();
        }
        $chart->dataset('Comments','line', $comments);
        $chart->labels($days);
        return view('user.dashboard',  compact('chart'));
    }
    
    private function generateDateRange(Carbon $start_date,Carbon $end_date){
        $dates=[];
        for ($date =$start_date;$date->lte($end_date);$date->addDay()){
            $dates[]=$date->format('Y-m-d');
        }
        return $dates;
    }
    public function comments(){
        return view('user.comments');
    }
    public function userProfile(){
        return view('user.userprofile');
    }
    
    public function userProfilePost(UserUpdate $request){
      $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        if($request['password'] !=""){
           if(!(Hash::check($request['password'],Auth::user()->password))){
               return redirect()->back()->with('error','Current Password Does Not Match');
           }
       }
       if(strcmp($request['password'], $request['new_password'])==0){
           return redirect()->back()->with('error','New Passpord Not Same As Current');
       }
       $validation = $request->validate([
           'password' => 'required',
           'new_password' => 'required|min:6|confirmed',
       ]);
       $user->password = bcrypt($request['new_password']);
        $user->save();
        return redirect()->back()->with('success','Password Change Successfully');
    
        
    }
}
