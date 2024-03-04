<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register</title>

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
                                <img class="img-fluid" src="{{ asset('img/register.png') }}" alt="">
                            </div>
                            <div class="login-wrap align-self-center p-4 p-md-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <h3 class="mb-4">Sign Up</h3>
                                    </div>
                                </div>
                                <form action="{{ route('proses_register') }}" method="POST" id="registerForm" class="signin-form">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label class="label" for="name">Name</label>
                                        <input id="name" name="name" type="text" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="username">Username</label>
                                        <input id="username" name="username" type="text" class="form-control" placeholder="Username" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="name">Email</label>
                                        <input id="email" name="email" type="text" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="password">Password</label>
                                        <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="form-control btn btn-primary rounded px-3"><strong>Sign Up</strong></button>
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
