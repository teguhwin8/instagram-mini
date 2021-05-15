@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Register') }}</div>
          <div class="card-body">
            <form method="POST" action="/user/edit" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <x-input name="username" label="Username" :data="$user" />
              <x-input name="email" label="Alamat Email" type="email" :data="$user" />
              <x-input name="fullname" label="Nama Lengkap" :data="$user" />
              <x-input name="bio" label="Bio" :data="$user" />
              <div class="form-group row">
                <label for="avatar" class="col-md-4 col-form-label text-md-right">Avatar</label>
                <div class="col-md-6">
                  <input type="file" name="avatar" id="avatar">
                  @if ($user->avatar)
                    <img src="{{ asset('images/avatar/' . $user->avatar) }}" alt="{{ $user->username }}" class="w-100 mt-3 rounded-lg">
                  @endif
                </div>
              </div>
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
