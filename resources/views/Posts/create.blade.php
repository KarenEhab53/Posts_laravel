@extends('layouts.app')
@section('title')
Create
@endsection

@section('content')
<!-- /resources/views/post/create.blade.php -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<!-- Create Post Form -->
<form method="POST" action="{{Route('posts.store')}}">
    @csrf
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="title" value="{{old('title')}}">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" >{{old('description')}}</textarea>
</div>

<div class="mb-3">
<label class="form-label">Post Creator</label>
<select name="postcreator" class="form-control">
  @foreach ($users as $user )
   <option value="{{$user->id}}">{{$user->name}}</option>
  @endforeach
 </select> 
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection