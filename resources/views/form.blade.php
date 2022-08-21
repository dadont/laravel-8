@extends('layout')

@section('title', isset($user) ? 'Update '. $user->name : 'Create user')

@section('content')
<a type="submit" class="btn btn-secondary" href="{{ route('users.index')}}">Back to users</a>
<form method="POST"
@if(isset($user))
action="{{ route('users.update', $user) }}">
@else
action="{{ route('users.store') }}">
@endif
@csrf

@isset($user)
  @method("PUT")
@endisset
<div class="row mt-3">
  <div class="col">
    <input name="name" 
    value="{{ isset($user) ? $user->name : null}}"
    type="text" class="form-control" placeholder="Name" aria-label="name">
  </div>
  <div class="col">
    <input name="email" 
    value="{{ isset($user) ? $user->email : null}}"
    type="text" class="form-control" placeholder="Email" aria-label="email">
  </div>
</div>
<div class="row">
<div class="col mt-3">
@if(isset($user))
<button type="submit" class="btn btn-success">Update</button>
@else
<button type="submit" class="btn btn-success">Create</button>
@endif
  </div>
  </div>
</form>



@endsection