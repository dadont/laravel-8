@extends('layout')

@section('title', 'User')

@section('content')
<form>
<div class="row">
  <div class="col">
    <input name="name" type="text" class="form-control" placeholder="Name" aria-label="name">
  </div>
  <div class="col">
    <input name="email" type="text" class="form-control" placeholder="Email" aria-label="email">
  </div>
</div>
<div class="row">
<div class="col mt-3">
    <button type="submit" class="btn btn-success">Create</button>
  </div>
  </div>
</form>



@endsection