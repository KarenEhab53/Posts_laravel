@extends('layouts.app')
@section('title')
Show
@endsection
@section('content')
<!-- card description -->
<div class="card container mt-4">
  <h5 class="card-header">Post Info</h5>
  <div class="card-body">
    <h5 class="card-title">Title : {{$post['name']}}</h5>
    <p class="card-text">Description : {{$post['description']}}</p>
  </div>
</div>

<div class="card container mt-4">
  <h5 class="card-header">Post Creator Info</h5>
  <div class="card-body">
    <h5 class="card-title">Name : Johny Cash</h5>
    <p class="card-text">Email : Johny@gmail.com</p>
    <p class="card-text">Created At: Thursday 25th of Descamber 2003 02:15:30AM</p>
  </div>
</div>
@endsection

