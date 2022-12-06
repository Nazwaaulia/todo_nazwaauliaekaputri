@extends('layout')

@section('content')

@if(session('addTodo'))
<div class="alert alert-success">
    {{session('addTodo')}}
</div>
@endif

<div class="card mt-4 rounded-5" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title text-center">Welcome to Dashboard</h5>
      <p class="card-text text-center">Username : {{auth()->user()->username}}<br>Email : {{auth()->user()->email}}</p>
    </div>
  </div>

@if(session('isGuest'))
<h2>
    <b>
        <i>
        {{session('isGuest')}}
        </i>
    </b>
</h2>
@endif
@endsection