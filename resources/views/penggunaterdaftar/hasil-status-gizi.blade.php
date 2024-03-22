@extends('layouts.app')

@section('content')
    <div class="container flex flex-col p-5 border border-gray-500 dark:border-gray-100 rounded-lg mt-40 xl:mt-2">
        <h2 class="text-center text-black dark:text-white text-3xl mb-5">Hasil Status Gizi</h2>
        <p class="text-center text-black dark:text-white">Status Gizi: {{ $statusGizi }}</p>
        <p class="text-center text-black dark:text-white">Tanggal Cek: {{ now()->format('d-m-Y H:i:s') }}</p>

    </div>
@endsection
