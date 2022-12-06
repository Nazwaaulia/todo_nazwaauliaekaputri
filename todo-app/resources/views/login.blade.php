<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layout')
    @section('content')
    <br>
    @if (session('successRegister'))
       <p style="color:darkred">{{ session('successRegister')}}</p>
       @endif
       <div class="kotak_login">
        <p class="tulisan_login"><strong>Sign In</strong></p>
    <form action="{{ route('login.baru') }}" method="POST">
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

</body>
</html>