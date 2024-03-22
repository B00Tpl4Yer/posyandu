@extends('layouts.admin')

@section('content')
<div class="container flex flex-col sm:justify-center items-center">
    <div class="mt-40 xl:mt-20 w-72 xl:w-full p-10  bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center justify-between mb-4">
            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Riwayat pemberian obat</h5>
        </div>
        <div class="flow-root">
            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach($reseps as $resep)
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="w-10 h-10 rounded-full" src="/artikel/user.png" alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                nama: {{ $resep->user->name }}
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                obat: {{$resep->namaobat}} kg
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                pemberi: {{$resep->pemberi}} cm
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                tanggal pemberian: {{ $resep->tanggalpemberian }}
                            </p>


                        </div>
                        <button id="dropdownRightButton{{$resep->id}}" data-dropdown-toggle="dropdownRight{{$resep->id}}" data-dropdown-placement="right" class="mr-3 mb-3 md:mb-0 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">keterangan <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                          </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownRight{{$resep->id}}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <p class="py-2 text-sm text-center text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRightButton{{$resep->id}}">
                                {{$resep->keterangan}}
                            </p>
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
