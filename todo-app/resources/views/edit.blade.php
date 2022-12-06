@extends('layout')

@section('content')
    <form action="/update/{{$todo['id']}}" method="POST" style="max-width: 500px; margin: auto; margin-bottom: 220px">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- untuk mengirim data ke controller yang nantinya di tampung oleh Request $request --}}
    @csrf
        {{-- karena attribute method pada tag form cuman bisa GET/POST sedangkan buat update data itu pake method PATCH, jadi method="post" di form di timpa sama method patch ini --}}
    @method('PATCH')
        <div class="d-flex flex-column">
            <label style="color: white;">Edit</label>
            {{-- attribute value berfungsi untuk menampilkan data di inputnya. data yang ditampilin merupakan data yang ditampilin merupakan data yang diambil di controller dan dikirim lewat compact tadi --}}
            <input type="text" name="title" class="rounded-1" value="{{$todo['tittle']}}">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex flex-column ">
            <label style="color: white;">Date</label>
            <input type="date" name="date" class="rounded-1" value="{{$todo['date']}}">
            @error('date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex flex-column">
            <label style="color: white;">Description</label>
            {{-- kenapa textarea gapunya attribute value? karena textarea bukan termasuk tag input/select dan dia punya penutup tag, jadi buat nampilinnya langsung tanpa attribute value (sebelum penutup tag texarea) --}}
            <textarea name="description" class="rounded-1" id="" cols="30" rows="10">{{$todo['description']}}</textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <button type="submit" class="tombol_login rounded-5">Kirim</button>
    </form>
@endsection