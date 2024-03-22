<!-- resources/views/admin/kelola-artikel.blade.php -->

@extends('layouts.admin')

@section('content')
<div class="container mt-20 ">
    <h1 class="text-center text-3xl font-semibold text-black dark:text-white mb-5 ">keloka artikel</h1>
<a href="{{route('admin.tambah-artikel.form')}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">tambah artikel</a>

<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5 ">
    @foreach ($artikels as $artikel)
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="{{ asset('artikel/' . $artikel->foto) }}" alt="gambar" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">judul:{{$artikel->judul}} </h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">penulis: {{$artikel->penulis}} </p>
            <div class="flex flex-row gap-2">
                <a href="{{ route('admin.edit-artikel', $artikel->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    edit
                </a>
                <form action="{{ route('admin.hapus-artikel', $artikel->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Hapus</button>
                </form>
            </div>
        </div>
    </div>

    @endforeach
</div>

</div>
<br><br><br><br>
@endsection
