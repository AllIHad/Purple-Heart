<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css'); }}">

</head>

<body class="">
    <nav class="navbar navbar-expand-lg navbar-scroll">
        <div class="container">
            <img src="{{ url('/img/purpleHeart.png') }}" height="70" alt="Purple Heart"
                loading="lazy" />
            <button class="navbar-toggler ps-0" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
                aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon d-flex justify-content-start align-items-center">
                    <i class="fas fa-bars"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="nav-link btn btn-link" type="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container">
        {{ $slot }}
    </section>


    <div class="container my-5">
        <footer class="bg-secondary text-center text-lg-start text-white">
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row my-4">
                    <!--Grid column-->
                    <div class="col-lg-12 col-md-12 mb-4 mb-md-0">

                        <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
                            <img src="{{ url('/img/purpleHeart.png') }}" height="70" alt=""
                                loading="lazy" />
                        </div>
                        <p class="text-center">Made with Heart</p>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2020 Copyright:
                <span class="text-white"> Purple Heart</span>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
</body>

</html>