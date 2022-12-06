@extends('layout')

@section('content')
    <div class="container">
        <div class="col-lg-6 m-auto">
            <div class="card bg-white">
                <div class="card-body">
                <form action="/register" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputPassword1">
                      </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('email')
    <p class="text-danger fw-bold">
        {{ $message }}
    </p>
    @enderror
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Username</label>
    <input type="Username" name="username" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/#">back login</a>

  <center>
    {{ session('berhasil') }}
  </center>
</form>
                </div>
            </div>

        </div>
    </div>
    @endsection                                                               