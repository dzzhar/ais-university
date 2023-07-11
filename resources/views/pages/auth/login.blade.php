<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <title>Sign In</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />
</head>

<body>
    <!-- Navbar -->
    <nav
        class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
        <div class="container">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-dark" href="/">
                Universitas Tadika Mesra
            </a>

            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav mx-auto">
                </ul>
                <ul class="navbar-nav d-lg-block d-none">
                    <li class="nav-item">
                        <a href="/" class="btn btn-sm mb-0 me-1 bg-gradient-light">Home Page</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="main-content mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        @if ($message = Session::get('Success'))
                            <div class="alert alert-success">{{ $message }}</div>
                        @endif
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Sign In</h4>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                <div class="card-body">
                                    <form action="/login/proses" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <input type="email" class="form-control form-control-lg"
                                                placeholder="Email" name="email" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" class="form-control form-control-lg"
                                                placeholder="Password" name="password" required>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-dark btn-lg w-100 mt-4 mb-0">
                                                Sign in
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">Don't have an account?
                                        <a href="/register" class="text-dark text-gradient font-weight-bold">
                                            Sign up
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <a href="/"
                                class="position-relative bg-gradient-dark h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                style="background-image: url('img/hero-bg.jpg'); background-size: cover;">
                                <span class="mask bg-gradient-dark opacity-6"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
