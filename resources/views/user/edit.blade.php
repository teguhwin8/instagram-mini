@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Register') }}</div>
          <div class="card-body">
            <form method="POST" action="/user/update">
              @csrf
              <x-input name="username" label="Username" disabled="false" :data="$user" />
              <x-input name="email" label="Alamat Email" type="email" disabled :data="$user" />
              <x-input name="fullname" label="Nama Lengkap" />
              <x-input name="bio" label="Bio" />
              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Simpan
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
