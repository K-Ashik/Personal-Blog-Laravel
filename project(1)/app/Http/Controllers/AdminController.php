<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\CheckRole;
use App\Post;
use App\User;
use App\Http\Requests\UserUpdate;

class AdminController extends Controller
{
    public function __construct() {
        return $this->middleware('CheckRole:admin');
    }

    public function dashboard(){
       return view('admin.dashboard');
   }
    public function posts(){
        $posts = Post::all();
       return view('admin.posts',  compact('posts'));
   }
    public function comments(){
       return view('admin.comments');
   }
    public function users(){
       $users = User::all();
       return view('admin.users',  compact('users'));
   }
   
   public function editPost($id){
        $post= Post::where('id',$id)->first();
        return view('admin.editPost',  compact('post'));
    }
    public function updatePost(createPost $request, $id){
        $post= Post::where('id',$id)->first();
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->user_id = Auth::id();
        $post->save();
        return back()->with('success','Post Updated Successfully');
       
    }
    
     public function deletePost($id){
        $post= Post::where('id',$id)->first();
        $post->delete();
        return back();
    }
    
    /****************  Admin User ************************/
    public function editUser($id){
        $user= User::where('id',$id)->first();
        return view('admin.editUser',  compact('user'));
    }
    public function updateUser(UserUpdate $request, $id){
        $user= User::where('id',$id)->first();
        $user->name = $request['name'];
        $user->email = $request['email'];
        if($request['author']==1){
            $user->author=true;
        }elseif($request['admin']==1){
            $user->admin=true;
        }
        $user->save();
        return back()->with('success','User Updated Successfully');
       
    }
    
     public function deleteUser($id){
        $post= User::where('id',$id)->first();
        $post->delete();
        return back();
    }
}
