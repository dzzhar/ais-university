<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <title>Sign Up</title>
    <!--     Fonts     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />
</head>

<body>
    <!-- Navbar -->
    <nav
        class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
        <div class="container">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="/">
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
        <a href="/" class="page-header align-items-start min-vh-45 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('img/hero-bg.jpg'); background-position: center;">
            <span class="mask bg-gradient-dark opacity-6"></span>
        </a>`
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7">
                    <div class="card">
                        <div class="card-header text-center pt-04">
                            <h4 class="font-weight-bolder">Sign Up</h4>
                            <p class="mb-0">Input your data to register to our website</p>
                        </div>
                        <div class="card-body">
                            <form action="/register/proses" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Name" name="name"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Email@example.com"
                                        name="email" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Password" name="password"
                                        required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                                </div>
                                <p class="text-sm text-center mt-3 mb-0">Already have an account?
                                    <a href="/login" class="text-dark font-weight-bolder">
                                        Sign in
                                    </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
