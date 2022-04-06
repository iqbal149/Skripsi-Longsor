<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('Sistem Informasi Pengelompokan Bencana Longsor ') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('material') }}/img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('racks') }}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('racks') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('racks') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('racks') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('racks') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('racks') }}/css/aos.css">
    <link rel="stylesheet" href="{{ asset('racks') }}/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('racks') }}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('racks') }}/css/jquery.timepicker.css">
    <link rel="stylesheet" href="{{ asset('racks') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('racks') }}/css/icomoon.css">
    <link rel="stylesheet" href="{{ asset('racks') }}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('stickytable') }}/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('stickytable') }}/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('stickytable') }}/css/component.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    @stack('css')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('logo-umkm.png') }}"
                    style="max-width: 250px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                    {{-- <!-- <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="solutions.html" class="nav-link">Solution</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfolio</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="portfolio.html">Portfolio</a>
                <a class="dropdown-item" href="portfolio-single.html">Portfolio Single</a>
              </div>
            </li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> --> --}}
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    @yield('content')

    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright text-center text-white">
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Fuzzy C-Means Bencana Longsor
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>
    <script src="{{ asset('racks') }}/js/jquery.min.js"></script>
    <script src="{{ asset('racks') }}/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{ asset('racks') }}/js/popper.min.js"></script>
    <script src="{{ asset('racks') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('racks') }}/js/jquery.easing.1.3.js"></script>
    <script src="{{ asset('racks') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('racks') }}/js/jquery.stellar.min.js"></script>
    <script src="{{ asset('racks') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('racks') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('racks') }}/js/aos.js"></script>
    <script src="{{ asset('racks') }}/js/jquery.animateNumber.min.js"></script>
    <script src="{{ asset('racks') }}/js/bootstrap-datepicker.js"></script>
    <script src="{{ asset('racks') }}/js/jquery.timepicker.min.js"></script>
    <script src="{{ asset('racks') }}/js/main.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js">
    </script>
    {{-- <script src="{{ asset('stickytable') }}/js/jquery.stickyheader.js"></script> --}}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://kit.fontawesome.com/f63af47055.js" crossorigin="anonymous"></script>

    @yield('js')

</body>

</html>
