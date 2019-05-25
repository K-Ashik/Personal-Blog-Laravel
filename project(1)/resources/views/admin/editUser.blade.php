@extends('layouts.admin')
@section('title') Author Post Form @endsection
@section('content')
<main class="app-content">
      
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Admin User</h3>
            <div class="tile-body">
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif
                
                 @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{route('updateUser',$user->id)}}" method="post">
                    @csrf
                <div class="form-group">
                  <label class="control-label">Name</label>
                  <input value="{{$user->name}}" name="name" class="form-control" type="text" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <input value="{{$user->email}}" name="email" class="form-control" type="text" placeholder="Enter Name">
                </div>
                    <div class="row">
                        <div class="col-md-4">
                <div class="form-group">
                  <label class="control-label">Permission</label>
                  <input value=1 {{$user->author==true ? 'checked':''}} type="checkbox" name="author" class="form-control">Author<br>
                  <input value=1 {{$user->admin==true ? 'checked':''}} type="checkbox" name="admin" class="form-control">Admin<br>
                </div>
                        </div>
                    </div>
                
               <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>&nbsp;&nbsp;&nbsp;
              </form>
            </div>
            <div class="tile-footer">
              
            </div>
          </div>
        </div>
        
        <div class="clearix"></div>
        
      </div>
    </main>
@endsection