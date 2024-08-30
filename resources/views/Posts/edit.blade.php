@extends('layouts.app')
@section('title')
Edit
@endsection
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{Route('posts.update',$post->id)}}">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Title</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="title" value="{{$post->title}}">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" >{{$post->description}}</textarea>
  </div>

  <div class="mb-3">
<label class="form-label">Post Creator</label>
<select name="postcreator" class="form-control">
  @foreach ($users as $user )
   <!-- <option @if ($user->id ==$post->user_id) selected @endif value="{{$user->id}}">{{$user->name}}</option> -->
   <option @selected($post->user_id==$user->id) value="{{$user->id}}">{{$user->name}}</option>
  @endforeach
 </select> 
</div>

  <button type="submit" class="btn btn-primary">Edit</button>
</form>
@endsection