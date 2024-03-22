@php
$user = Auth::user();
$coba = '';

if ($user && $user->hasRole('admin')) {
    $coba = 'layouts.admin';
} elseif ($user && $user->hasRole('pengguna terdaftar')) {
    $coba = 'layouts.app';
} else {
    $coba = 'layouts.public';
}
@endphp

@extends($coba)

@section('content')
    <div class="text-black dark:text-white mb-52 pt-28 xl:pt-80  ">
        @if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
        @foreach ($artikels as $artikel)
        <div class="container grid justify-items-center w-96">
            @if ($artikel->foto)
            <img src="{{ asset('artikel/' . $artikel->foto) }}" class="border rounded-lg w-full" alt="Foto Artikel">
            @endif
            <div class="mt-10">
                <h5 class="text-3xl text-center">{{ $artikel->judul }}</h5>
                <p class="text-lg text-center mb-4">Penulis:{{ $artikel->penulis }}</p>
                <div class="grid grid-cols-1 w-96">
                    <p class="text-sm w-full">{!! $artikel->konten !!}</p>
                    {{-- <p class="text-sm w-5/6">{{ $artikel->konten }}</p> --}}
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection
