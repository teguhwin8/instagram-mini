@extends('layouts.app')
@section('content')
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
@endsection
