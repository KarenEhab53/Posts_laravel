@extends('layouts.app')
@section('title')
Edit
@endsection
@section('content')
<form method="POST" action="{{Route('posts.update',1)}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="title">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Post Creator</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="postupdater">
</div>

<button type="submit" class="btn btn-primary">Edit</button>
</form>
@endsection