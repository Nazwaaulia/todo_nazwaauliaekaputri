@extends('layout')

@section('content')
<form action="/store"method="post"style="max-width: 500px; margin: auto;">
    {{-- menampilkan alert ketika validasi menghasilkan error --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    {{--mengirim data ke controller yg di tampung oleh request $request--}}
    @csrf
</div>
<div class="d-flex flex-column text-dark">
    <label style="color: black;">Title</label>
    <input type="text" name="title" class="rounded-1">
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="d-flex flex-column text-dark">
    <label style="color: black;">Date</label>
    <input type="date" name="date" class="rounded-1">
    @error('date')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="d-flex flex-column text-dark">
    <label style="color: black;">Description</label>
    <textarea name="description" class="rounded-1" id="" cols="30" rows="10"></textarea>
    @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div><br>
        
<button type="submit" class="tombol_login">Kirim</button>
</form>
@endsection
