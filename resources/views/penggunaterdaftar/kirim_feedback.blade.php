@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center text-3xl font-semibold text-black dark:text-white mt-40 xl:mt-0">Kirim Masukan anda</h1>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" class="mt-10" action="{{ route('kirim-feedback') }}">
            @csrf

            <div class="relative z-0 w-full mb-6 group">
                <textarea  type="text" name="pesan" id="pesan" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('pesan') is-invalid @enderror" rows="4"  placeholder=" "  required>{{ old('pesan') }}</textarea>
                <label for="pesan" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">masukkan pesan anda </label>
                @error('pesan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 border border-gray-400 dark:border-gray-white">Kirim</button>
        </form>

    </div>
@endsection

