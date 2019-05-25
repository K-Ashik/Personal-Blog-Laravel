@extends('layouts.admin')
@section('content')
<main class="app-content">
     
      <div class="row">
        
        <div class="col-md-12 ">
          <div class="tile">
            <h3 class="tile-title text-center">Admin User</h3>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($users as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>
               {{\Carbon\Carbon::parse($user->created_at)->diffForHumans()}}
                  </td>
                  <td>
               {{\Carbon\Carbon::parse($user->updated_at)->diffForHumans()}}
                  </td>
                  <td>
                      <a href="{{route('editUser',$user->id)}}" class="fa fa-edit">Edit</a>&nbsp;&nbsp;|
                      <form id="deleteUser-{{$user->id}}" method="post" action="{{route('deleteUser',$user->id)}}">@csrf</form>
                      <a onclick="document.getElementById('deleteUser-{{$user->id}}').submit()" href="#" class="fa fa-trash">Delete</a>
                  </td>
                </tr>
               @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="clearfix"></div>
        
      </div>
    </main>
@endsection