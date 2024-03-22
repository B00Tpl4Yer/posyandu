@extends('layouts.app')

@section('content')
    <h1>Halaman Admin</h1>

    <h2>Daftar Admin:</h2>
    <ul>
        @foreach($admins as $admin)
            <li>{{ $admin->name }}</li>
        @endforeach
    </ul>
@endsection
