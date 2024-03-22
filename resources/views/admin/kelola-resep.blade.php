@extends('layouts.admin')

@section('content')
    <h1>Kelola Resep</h1>

    <h2>Daftar Resep:</h2>
    <ul>
        @foreach($reseps as $resep)
            <li>{{ $resep->nama }}</li>
        @endforeach
    </ul>
@endsection
