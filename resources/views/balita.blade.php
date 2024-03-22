@php
$user = Auth::user();
$ude = '';

if ($user && $user->hasRole('admin')) {
    $lude = 'layouts.admin';
} elseif ($user && $user->hasRole('pengguna terdaftar')) {
    $lude = 'layouts.app';
} else {
    $lude = 'layouts.public';
}
@endphp

@extends($lude)

@section('content')
    <div class="grid grid-cols-1 justify-center mt-20 mb-56">
        <div class="text-center text-3xl font-semibold text-black dark:text-white mb-3">video Pembelajaran <br> untuk Batita</div>
        <div class="border rounded-lg w-96 border-gray-300 dark:border-white">
            <iframe src="https://www.youtube.com/embed/CBBodG-WZ7k?si=1V0A-NMRuOVi9X8t" class="rounded-lg w-96 h-96" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
@endsection
