@extends('layouts.layout_admin')


@section('title')
    <title>Register</title>
@endsection


<!-- Content -->
@section('content')

<!-- Bantuan -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col d-flex align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Register</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <div class="img align-self-center p-4 p-md-5">
                                <img class="img-fluid" style="width: 500px;" src="{{ asset('img/register.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="align-self-center p-4 p-md-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <h3 class="mb-4">Daftar</h3>
                                    </div>
                                </div>
                                <form action="{{ route('proses_register') }}" method="POST" id="registerForm">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label class="label" for="name">Nama</label>
                                        <input id="name" name="name" type="text" class="form-control" placeholder="Nama" required>
                                    </div>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group mb-3">
                                        <label class="label" for="username">Username</label>
                                        <input id="username" name="username" type="text" class="form-control" placeholder="Username" required>
                                    </div>
                                    @error('username')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group mb-3">
                                        <label class="label" for="name">Email</label>
                                        <input id="email" name="email" type="text" class="form-control" placeholder="Email" required>
                                    </div>
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group mb-3">
                                        <label class="label" for="password">Password</label>
                                        <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
                                        <input type="checkbox" onclick="togglePassword()" class="mr-1">Tampilkan Password
                                    </div>
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <script>
                                        function togglePassword() {
                                            var passwordField = document.getElementById("password");
                                            if (passwordField.type === "password") {
                                                passwordField.type = "text";
                                            } else {
                                                passwordField.type = "password";
                                            }
                                        }
                                    </script>
                                    <div class="form-group">
                                        <button type="submit" class="form-control btn btn-primary rounded px-3"><strong>Daftar</strong></button>
                                    </div>
                                </form>

                            </div>
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

