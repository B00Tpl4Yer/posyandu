@extends('layouts.app') <!-- Pastikan layout Anda sudah ada -->

@section('content')
<div class="container">
    <h1>Daftar Pengguna Terdaftar</h1>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <!-- Tambahkan kolom lain sesuai kebutuhan -->
            </tr>
        </thead>
        <tbody>
            @foreach($penggunaterdaftar as $key => $pengguna)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $pengguna->name }}</td>
                <td>{{ $pengguna->email }}</td>
                <!-- Tambahkan kolom lain sesuai kebutuhan -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
