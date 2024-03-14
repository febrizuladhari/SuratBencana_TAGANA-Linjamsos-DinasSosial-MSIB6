@extends('layouts.layout_admin')


@section('title')
    <title>Profile</title>
@endsection


<!-- Content -->
@section('content')

<!-- Bantuan -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col d-flex align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Profil</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card">
                        <div class="card-header">Detail Pengguna</div>

                        <div class="card-body">
                            <form>

                                <div class="row my-2">
                                    <div class="col">
                                        <label for="name">Nama</label>
                                        <input value="{{ Auth::user()->name }}" id="name" type="text" class="form-control" name="name" disabled>
                                    </div>
                                    <div class="col">
                                        <label for="username">Username</label>
                                        <input value="{{ Auth::user()->username }}" id="username" type="text" class="form-control" name="username" disabled>
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col">
                                        <label for="email">Email</label>
                                        <input value="{{ Auth::user()->email }}" id="email" type="text" class="form-control" name="email" disabled>
                                    </div>
                                    <div class="col">
                                        <label for="level">Level</label>
                                        <input value="{{ Auth::user()->level }}" id="level" type="text" class="form-control" name="level" disabled>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card">
                        <div class="card-header">Ganti Password</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('profile-update') }}">
                                @csrf

                                <div class="form-group row my-4">
                                    <label for="current_password" class="col-md-4 col-form-label text-md-right">Password Sekarang</label>

                                    <div class="col-md-6">
                                        <input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" required autocomplete="current-password">

                                        @error('current_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row my-4">
                                    <label for="new_password" class="col-md-4 col-form-label text-md-right">Password Baru</label>

                                    <div class="col-md-6">
                                        <input id="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" required autocomplete="new-password">

                                        @error('new_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row my-4">
                                    <label for="new_password_confirmation" class="col-md-4 col-form-label text-md-right">Konfirmasi Password Baru</label>

                                    <div class="col-md-6">
                                        <input id="new_password_confirmation" type="password" class="form-control" name="new_password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Ganti Password
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


<!-- Script -->
@section('script')

@endsection
