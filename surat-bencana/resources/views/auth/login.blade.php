<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>

    @yield('title')
        <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon.ico') }}">
    @yield('style')

    <!-- Custom fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Custom styles -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>
<body>
    @include('sweetalert::alert')

    <section class="ftco-section">
        <div class="d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-12">
                        <div class="wrap d-md-flex">
                            <div class="img align-self-center p-4 p-md-5">
                                <img class="img-fluid" src="{{ asset('img/login.png') }}" alt="">
                            </div>
                            <div class="login-wrap align-self-center p-4 p-md-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <h3 class="mb-4">Sign In</h3>
                                    </div>
                                </div>

                                {{-- Error Alert --}}
                                @if(session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{session('error')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <form action="{{ url('proses_login') }}" id="loginForm" method="POST" class="signin-form">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label class="label" for="username">Username</label>
                                        <input id="username" name="username" type="text" class="form-control" placeholder="Username" required>
                                    </div>

                                    <div class="form-group mb-5">
                                        <label class="label" for="password">Password</label>
                                        <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
                                        <input type="checkbox" onclick="togglePassword()"> Tampilkan Password
                                    </div>
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
                                        <button type="submit" class="form-control btn btn-primary rounded px-3"><strong>Sign In</strong></button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>

    <!-- JavaScript-->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
