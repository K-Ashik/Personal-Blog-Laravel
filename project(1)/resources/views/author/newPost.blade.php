@extends('layouts.admin')
@section('title') Author Post Form @endsection
@section('content')
<main class="app-content">
      
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Author Post</h3>
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
                <form action="{{route('createPost')}}" method="post">
                    @csrf
                <div class="form-group">
                  <label class="control-label">Name</label>
                  <input name="title" class="form-control" type="text" placeholder="Enter Title">
                </div>
              
                <div class="form-group">
                  <label class="control-label">Description</label>
                  <textarea name="content" class="form-control" rows="4" placeholder="Enter your Content"></textarea>
                </div>
               <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>&nbsp;&nbsp;&nbsp;
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