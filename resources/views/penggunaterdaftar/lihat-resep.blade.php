@extends('layouts.app')

@section('content')
<div class="container flex flex-col sm:justify-center items-center ">
    <div class="w-full mt-52 xl:mt-10 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center justify-between mb-4">
            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Daftar resep</h5>
        </div>
        <div class="flow-root w-full ">
            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach($reseps as $resep)
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="w-10 h-10 rounded-full" src="/artikel/user.png" alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                               nama makanan: {{$resep->namaobat}}
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                               pemberi: {{$resep->pemberi}}
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                              tanggal pemberian:  {{$resep->tanggalpemberian}}
                            </p>


                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                          dosis:  {{$resep->dosis}}
                        </div>
                    </div>

                    <div id="accordion-collapse" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-{{$resep->id}}">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-{{$resep->id}}" aria-expanded="true" aria-controls="accordion-collapse-body-{{$resep->id}}">
                                <span>Keterangan</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-{{$resep->id}}" class="hidden" aria-labelledby="accordion-collapse-heading-{{$resep->id}}">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <p class="mb-2 text-gray-500 dark:text-gray-400"> {{$resep->keterangan}} </p>
                            </div>
                        </div>

                    </div>

                </li>
                @endforeach
            </ul>
        </div>
    </div>

</div>
@endsection
