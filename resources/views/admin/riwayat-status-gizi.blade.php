@extends('layouts.admin')

@section('content')
<div class="container">
    @if(session('success'))
    <div id="alert-5" class="flex items-center p-4 rounded-lg bg-gray-200 dark:bg-gray-800" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-check text-gray-700 dark:text-gray-50" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
            <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
            <path d="M15 19l2 2l4 -4"></path>
        </svg>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium text-gray-800 dark:text-gray-300">
            {{ session('success') }}
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-gray-200 text-gray-500 rounded-lg focus:ring-2 focus:ring-gray-400 p-1.5 hover:bg-gray-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white" data-dismiss-target="#alert-5" aria-label="Close">
            <span class="sr-only">Dismiss</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>

    @endif

    <div class="w-72 xl:w-full flex flex-col mt-28 mb-20 border border-gray-100 dark:border-gray-800 p-5 rounded-lg bg-white dark:bg-gray-700">
        <h1 class="text-center text-3xl font-medium text-black dark:text-white mb-5">hasil pengecekkan gizi</h1>
        @foreach($riwayatStatusGizi as $riwayat)
        <div class="flow-root">
            <div class="flex items-center space-x-4">
                <div class="flex-shrink-0">
                    <img class="w-10 h-10 rounded-full" src="/artikel/user.png" alt="Neil image">
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                     Nama:   {{ $penggunaTerdaftar->where('id', $riwayat->user_id)->first()->name }}
                    </p>
                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                        usia(bulan):   {{ $riwayat->usia_bulan }}
                       </p>
                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                        Berat badan(kg):   {{ $riwayat->berat_badan }}
                       </p>
                       <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                        tinggi(cm):   {{ $riwayat->tinggi }}
                       </p>
                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                      tanggal cek:  {{ now()->format('d-m-Y H:i:s') }}
                    </p>
                </div>
            <div class="text-right inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
             Hasil: <br>  {{$riwayat->status_gizi}}
            </div>

            </div>
        </div>
        @endforeach
    </div>

    @endsection


