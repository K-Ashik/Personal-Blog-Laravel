@extends('layouts.admin')
@section('content')
<main class="app-content">
     
      <div class="row">
        
        <div class="col-md-12 ">
          <div class="tile">
            <h3 class="tile-title text-center">Author Posts</h3>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach(Auth::user()->posts as $post)
                <tr>
                  <td>{{$post->id}}</td>
                  <td>{{$post->title}}</td>
                  <td>{{$post->content}}</td>
                  <td>
               {{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}
                  </td>
                  <td>
               {{\Carbon\Carbon::parse($post->updated_at)->diffForHumans()}}
                  </td>
                  <td>
                      <a href="{{route('editPost',$post->id)}}" class="fa fa-edit">Edit</a>&nbsp;&nbsp;|
                      <form id="deletePost-{{$post->id}}" method="post" action="{{route('deletePost',$post->id)}}">@csrf</form>
                      <a onclick="document.getElementById('deletePost-{{$post->id}}').submit()" href="#" class="fa fa-trash">Delete</a>
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