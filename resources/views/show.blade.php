@extends('layout')

@section('title', 'User '. $user->name)

@section('content')
<a type="submit" class="btn btn-secondary" href="{{ route('users.index')}}">Back to users</a>
<div class="card mt-3" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Id: {{$user->id}}</li>
    <li class="list-group-item">Name: {{$user->name}}</li>
    <li class="list-group-item">Email: {{$user->email}}</li>
    <li class="list-group-item">Created: {{$user->created_at->format('d/m/y H:i:s')}}</li>
    <li class="list-group-item">Update: {{$user->updated_at->format('d/m/y H:i:s')}}</li>
  </ul>
</div>
<form method="POST" class="mt-3" action="{{ route('users.destroy', $user) }}">
      <a type="button" class = "btn btn-warning" href="{{ route('users.edit', $user) }}">Edit</a>
      @csrf
      @method('DELETE')
      <button type="submit" class = "btn btn-danger">Delete</button>
      </form>

@endsection