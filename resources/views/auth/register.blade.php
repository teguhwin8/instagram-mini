@extends('layouts.login')
@section('content')
<div class="bg-white px-12">
  <img src="{{ asset('image/instagram_logo.svg') }}" alt="Instagram Logo" class="w-3/4 mx-auto py-8">
  <div class="text-center">
    <button class="rounded w-full block bg-blue-500 hover:bg-blue-600 py-2 px-6 text-white font-medium">
      Lanjutkan dengan Facebook
    </button>
  </div>
  <div class="h-1 mt-10 border-b border-gray-300 relative">
    <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white z-10 px-4 font-bold text-gray-400">
      ATAU
    </div>
  </div>
  <div class="my-8">
    <form method="POST" action="{{ route('register') }}">
      @csrf

      {{-- username --}}
      <div>
        <input type="text" class="general-input mt-3" placeholder="Nama pengguna" name="username" value="{{ old('username') }}">
        @if ($errors->has('username'))
        <span class="text-sm text-red-600">
          {{ $errors->first('username') }}
        </span>
        @endif
      </div>

      {{-- email --}}
      <div>
        <input type="email" class="general-input mt-3" placeholder="Email" name="email" value="{{ old('email') }}">
        @if ($errors->has('email'))
        <span class="text-sm text-red-600">
          {{ $errors->first('email') }}
        </span>
        @endif
      </div>

      {{-- password --}}
      <div>
        <input type="password" class="general-input mt-3" placeholder="Kata sandi" name="password" value="{{ old('password') }}">
        @if ($errors->has('password'))
        <span class="text-sm text-red-600">
          {{ $errors->first('password') }}
        </span>
        @endif
      </div>

      {{-- password_confirmation --}}
      <div>
        <input type="password" class="general-input mt-3" placeholder="Ulangi kata sandi" name="password_confirmation" value="{{ old('password_confirmation') }}">
        @if ($errors->has('password_confirmation'))
        <span class="text-sm text-red-600">
          {{ $errors->first('password_confirmation') }}
        </span>
        @endif
      </div>

      <button class="btn-block mt-3">DAFTAR</button>
      <div class="text-center mt-5">
        <span class="text-gray-400 mr-1">Punya akun?</span>
        <a href="/login" class="text-blue-500 hover:text-blue-600">Login</a>
      </div>
    </form>
  </div>
</div>
{{-- 
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Register') }}</div>
<div class="card-body">
  <form method="POST" action="{{ route('register') }}">
    @csrf
    <x-input name="username" label="Username" />
    <x-input name="email" label="Alamat Email" type="email" />
    <x-input name="password" label="Password" type="password" />
    <x-input name="password_confirmation" label="Ulangi Password" type="password" />
    <div class="form-group row mb-0">
      <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
          {{ __('Register') }}
        </button>
      </div>
    </div>
  </form>
</div>
</div>
</div>
</div>
</div>
--}}
@endsection