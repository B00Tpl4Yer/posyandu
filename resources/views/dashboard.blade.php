@php
$user = Auth::user();
$incl = '';

if ($user && $user->hasRole('admin')) {
    $incl = 'layouts.admin';
} elseif ($user && $user->hasRole('pengguna terdaftar')) {
    $incl = 'layouts.app';
} else {
    $incl = 'layouts.public';
}
@endphp

@extends($incl)
@section('content')
<div class="container">
    <div class="w-96">
        <h1 class="text-center text-3xl font-medium text-black dark:text-white mt-28 xl:mt-2">Selamat datang di posyandu</h1>
    </div>
</div>
@endsection

