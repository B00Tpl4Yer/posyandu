@php
$user = Auth::user();
$clude = '';

if ($user && $user->hasRole('admin')) {
$clude = 'layouts.admin';
} elseif ($user && $user->hasRole('pengguna terdaftar')) {
$clude = 'layouts.app';
} else {
$clude = 'layouts.public';
}
@endphp
@extends($clude)

@section('content')
<div class="grid grid-cols-1 justify-center mt-20 mb-56">
    <div class="text-center text-3xl font-semibold text-black dark:text-white mb-3">video Pembelajaran <br> untuk Balita</div>
    <div class="border rounded-lg w-96 border-gray-300 dark:border-white">
        <iframe src="https://www.youtube.com/embed/MlqCRowZsZ4?si=JJp1AUkclmp06tcJ" class="rounded-lg w-96 h-96" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

</div>
@endsection
