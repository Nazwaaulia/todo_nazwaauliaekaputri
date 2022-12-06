@extends('layout')

@section('content')
<table class="table table striped table-bordered table-light">
    <tr>
        <td>No</td>
        <td>kegiatan</td>
        <td>Deskripsi</td>
        <td>Batas waktu</td>
        <td>Status</td>
        <td>Aksi</td>
    </tr>
@php
    $no = 1;
    @endphp
    @foreach($todos as $todo)
    <tr>
        {{--tiap di looping,$no bakal di tambah 1 --}}
        <td>{{ $no++ }}</td>
        <td>{{ $todo ['title'] }}</td>
        <td>{{ $todo ['description'] }}</td>
            {{--carbon : package date padaa laravel nantinya si date yang 2022-2021 formtannya jadi 22 november,2022--}}
            <td>{{carbon\carbon::parse($todo['date'])->format('j F,Y') }}</td>
            {{--konsep ternary,if statusnya 1 tampilan teks complated kalo 0 nampilim teks on-proxess.status tuh boolean kan?cuman antara 1 atau 0--}}
            <td>{{$todo['status']? 'complated' : 'on-process'}}</td>
            <td class="d-flex">
                {{-- karena path {id} merupakan path dinamis, jadi kita harus isi path dinamis tersebut. karena kita mengisinya dengan data dinamis/data dari database jadi buat isi nya pake kurung kurawal dua kali --}}
                <button class="btn btn-dark me-1" onclick="location.href='/edit/{{$todo['id']}}'">Edit</button>
                {{-- fitur delete harus menggunakan form lagi. tombol hapusnnya disimpan di tag button --}}
                <form action="/destroy/{{$todo['id']}}" method="post" style="display: flex">
                    @csrf
                    {{-- menimpan method="POST", karena di route nya menggunakan method delete --}}
                    @method('DELETE')
                    
                    <button type="submit" class="btn btn-dark me-1">Hapus</button>
                </form>
               {{--button hanya muncul ketika status nya masih on procces (0)--}}
               @if ($todo['status']==0)
                <form action="/complated/{{$todo['id']}}"method="POST">
                @csrf
                @method('PATCH')
                <button type="sumbit" class="btn btn-success">Complated</button>
                </form>
                @endif
            </td>
    </tr>
@endforeach
</table>
@endsection