<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laundry</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Javascript -->
    <script defer src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script defer src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="">Laundry</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success" href="{{url('login')}}">@lang('landing.loginOrRegister')</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-blue py-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-3 text-white mt-5 mb-2">Selamat datang di Laundry</h1>
                    <p class="lead mb-5 text-white-50">@lang('landing.tagline')</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{asset('img/landing/header.png')}}" alt="" srcset="">
                </div>
            </div>
        </div>
    </header>

    <section class="p-5 text-center">
        <h3>@lang('landing.why')</h3>
    </section>

    <!-- Page Content -->
    <section class="kelebihan bg-blue text-white">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Peralatan Lengkap dan Canggih</h4>
                    <p>Laundry kami menggunakan peralatan yang cukup lengkap dan canggih. Peralatan kami memungkinkan
                        baju tidak perlu dijemur dan mengurangi debu pada baju</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{asset('img/landing/alat.png')}}" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>

    <section class="kelebihan bg-blue text-white">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{asset('img/landing/tipebaju.png')}}" alt=""
                        srcset="">
                </div>
                <div class="col-lg-6">
                    <h4>Segala Tipe Pakaian</h4>
                    <p>Laundry kami menerima segala tipe pakaian mulai dari baju, celana, jas, gorden, bed cover,
                        selimut, seprei, karpet, dan lain lain.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="kelebihan bg-blue text-white">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Pegawai Profesional</h4>
                    <p>Laundry kami terdiri dari pegawai-pegawai yang profesional yang mampu bekerja dalam tim dengan
                        cukup baik dan handal di bidangnya sehingga membuat laundry kami minim kesalahan</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{asset('img/landing/pegawai.png')}}" alt=""
                        srcset="">
                </div>
            </div>
        </div>
    </section>

    <section class="text-center p-5">
        <h3>Apa saja yang bisa kami laundry?</h3>
    </section>

    <section class="bg-blue p-5 text-center">
        <div class="container">
            <div class="row flex-row flex-nowrap kategori">
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{asset('img/landing/Baju.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Baju</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{asset('img/landing/Celana.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Celana</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{asset('img/landing/Jas.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Jas</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{asset('img/landing/Selimut.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Selimut</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-white bg-blue">
        <div class="container p-5">
            <div class="row">
                <div class="col-md-6 mb-4 mb-sm-0">
                    <h5>Alamat</h5>
                    <p>Jl. Letjen S. Parman Jl. Gn. Guntur No.14, Gunungsari Ulu, Kec. Balikpapan Tengah, Kota Balikpapan, Kalimantan Timur 76113</p>
                    <br>
                    <h5>Kontak</h5>
                    <p>Ridanrxind@gmail.com</p>
                    <p>081346159471 (admin R)</p>
                    <p>081520436009 (admin F)</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Laundry RF 2023</p>
        </div>
        <!-- /.container -->
    </footer>

</body>

</html>
