@extends('layout')
@section('content')
<!DOCTYPE html>
<div class="container"><br>
        <div class="col-md-4 col-md-offset-4 m-auto bg-light p-3 rounded ">
            <h2 class="text-center"><br>Halaman Login </h2>
            <hr>
            {{-- <form action="{{ route('login') }}" method="post"> --}}
                <form>
                <div class="kotak_login">
                    <p class="tulisan_login"><strong>Sign In</strong></p>
                <form action="{{ route('login-baru') }}" method="POST">
                    @csrf
                    <div class="emlclass">
                        <label>Email</label>
                        <input type="email" name="email" class="form_login"  placeholder="Masukan Email">
                    </div>
                    <div class="pswdclass">
                        <label>Password</label>
                        <input type="password" name="password" class="form_login" placeholder="Masukan Password">
                    </div>
                    <div class="tmblclass text-center">
                        <button type="submit" class="tombol_login">Login</button>
                    <a href="register">don't have an account yet, sign up here !</a>
                    </div>

                    @endsection

                    @if(session('error'))
                    {{ session('error') }}
                    @endif

                    @if(session('isLogin'))
                    {{ session('isLogin') }}
                    @endif 
                </form>
        </div>
</div>