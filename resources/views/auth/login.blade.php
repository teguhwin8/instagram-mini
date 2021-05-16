@extends('layouts.login')
@section('content')
<div class="bg-white p-10">
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
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div>
        <input type="text" class="general-input mt-3" placeholder="Nama pengguna atau email" name="email" value="{{ old('email') }}">
        @if ($errors->has('email'))
        <span class="text-sm text-red-600">
          {{ $errors->first('email') }}
        </span>
        @endif
      </div>
      <div>
        <input type="password" class="general-input mt-3" placeholder="Kata sandi" name="password" value="{{ old('password') }}">
        @if ($errors->has('password'))
        <span class="text-sm text-red-600">
          {{ $errors->first('password') }}
        </span>
        @endif
      </div>
      <div class="text-right my-5">
        <a href="#" class="text-blue-500 hover:text-blue-600">Lupa kata sandi?</a>
      </div>
      <button type="submit" class="btn-block mt-3">LOGIN</button>
      <div class="text-center mt-5">
        <span class="text-gray-400 mr-1">Tidak punya akun?</span>
        <a href="/register" class="text-blue-500 hover:text-blue-600">Buat akun</a>
      </div>
    </form>
  </div>
</div>
{{-- 
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Login') }}</div>
<div class="card-body">
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <x-input name="email" label="Alamat Email" type="email" />
    <x-input name="password" label="Password" type="password" />
    <div class="form-group row">
      <div class="col-md-6 offset-md-4">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
          <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
          </label>
        </div>
      </div>
    </div>
    <div class="form-group row mb-0">
      <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-primary">
          {{ __('Login') }}
        </button>
        @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
          {{ __('Forgot Your Password?') }}
        </a>
        @endif
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