@extends('layouts/app')
@section('title')
Index
@endsection
@section('content')

<!-- create buttons -->
<div class="container text-center mt-4">
  <a href="{{route('posts.create')}}" class="btn btn-success">Create</a>
</div>



<!-- table -->
 <!-- id  title  posted_by created_at -->
 
<table class="table container mt-4">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Posted By</th>
      <th scope="col">Created at</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody> 
    @foreach ($posts as $post )
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->user?$post->user->name:'not found'}}</td>
      <td>{{$post->created_at->format('Y-m-d')}}</td>
      <td>
        <a href="{{route('posts.show',$post->id)}}" class="btn btn-info">View</a>
      <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a>
      <form method="post" action="{{route('posts.destory',$post->id)}}"  style="display: inline" >
@csrf
@method('DELETE')
        <button type="submit"class="btn btn-danger">Delete</button>
      </form>
      </td>
    </tr>
     @endforeach
  </tbody>
</table>


@endsection
