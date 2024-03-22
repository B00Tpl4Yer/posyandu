@php
$user = Auth::user();
$inc = '';

if ($user && $user->hasRole('admin')) {
    $inc = 'layouts.admin';
} elseif ($user && $user->hasRole('pengguna terdaftar')) {
    $inc = 'layouts.app';
} else {
    $inc = 'layouts.public';
}
@endphp

@extends($inc)

  @section('content')
  <div class="flex flex-row justify-center mt-20 mb-56">

          <div class="border rounded-lg w-96 border-gray-300 dark:border-white">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15920.168951798712!2d119.61601117468453!3d-4.0117347868852615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d95bb6a661c0c93%3A0xbbc8b7a49e970e52!2sPosyandu%20Lagaligo%20II!5e0!3m2!1sid!2sid!4v1696064270312!5m2!1sid!2sid" class=" rounded-lg w-96 h-96" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

  </div>
  @endsection
