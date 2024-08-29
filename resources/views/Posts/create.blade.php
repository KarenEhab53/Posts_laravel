@extends('layouts.app')
@section('title')
Create
@endsection

@section('content')
<form method="POST" action="{{Route('posts.store')}}">
    @csrf
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
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="postcreator">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection