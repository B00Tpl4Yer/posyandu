@extends('layouts.app')

@section('content')
<div class="container flex flex-col sm:justify-center items-center">
    <div class="mt-40 xl:mt-20 w-full  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center justify-between mb-4">
            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Riwayat status gizi</h5>
        </div>
        <div class="flow-root">
            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach($riwayatStatusGizi as $riwayat)
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="w-10 h-10 rounded-full" src="/artikel/user.png" alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                usia: {{$riwayat->usia_bulan}} bulan
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                berat: {{$riwayat->berat_badan}} kg
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                berat: {{$riwayat->tinggi}} cm
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                waktu: {{ now()->format('d-m-Y H:i:s') }}
                            </p>


                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            {{$riwayat->status_gizi}}
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <br><br><br><br><br><br>
</div>
@endsection
