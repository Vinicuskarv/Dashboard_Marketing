<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet"/>
        <script src="{{ asset('assets/js/pace.min.js') }}"></script>
        <!--favicon-->
        <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
        <!-- Vector CSS -->
        <link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
        <!-- simplebar CSS-->
        <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
        <!-- Bootstrap core CSS-->
        <link href="{{ asset('assets/css/bootstrap.min.css" rel="stylesheet') }}"/>
        <!-- animate CSS-->
        <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Icons CSS-->
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Sidebar CSS-->
        <link href="{{ asset('assets/css/sidebar-menu.css') }}" rel="stylesheet"/>
        <!-- Custom Style-->
        <link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet"/>

    </head>
    <body class="bg-theme bg-theme1">
        <div class="topbar-nav">
            @if (Route::has('login'))
                <div class="navbar navbar-expand fixed-top">
                    <ul class="navbar-nav align-items-center right-nav-link">
                        @auth
                            <li class="nav-item dropdown-lg">
                                <a href="{{ url('/dashboard') }}" class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item dropdown-lg">
                                <a href="{{ route('login') }}" class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect">Log in</a>
                            </li>
                                @if (Route::has('register'))
                                <li class="nav-item dropdown-lg">
                                    <a href="{{ route('register') }}" class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect">Register</a>
                                </li>
                                @endif

                        @endauth
                    </ul>
                </div>
            @endif
        </div>
        <div class="py-12 bg-gray-100">
            <div class="container" style="padding-top:60px;">
                <div class="row d-none d-sm-flex my-4">
                    <div class="col-12 col-lg-8">
                        <div class="rounded-4 card border border-0" style="height: 100%">
                            <img src="{{ asset('img/arvore_paisagem.jpg') }}" class="card-img-top rounded-top-4" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 d-flex align-content-between flex-wrap ">
                        <div class="rounded-4 card border border-0 mt-4 mt-lg-0">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ asset('img/arvore_paisagem.jpg') }}" class="img-fluid rounded-start-4 " alt="..." style="height:100%;object-fit: cover;">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <br>
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card</p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="rounded-4 card border border-0 mt-4 mt-lg-2">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ asset('img/arvore_paisagem.jpg') }}" class="img-fluid rounded-start-4 " alt="..." style="height:100%;object-fit: cover;">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <br>
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card</p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="rounded-4 card border border-0 mt-4 mt-lg-2">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ asset('img/arvore_paisagem.jpg') }}" class="img-fluid rounded-start-4 " alt="..." style="height:100%;object-fit: cover;">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <br>
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card</p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="rounded-4 card border border-0 mt-4 mt-lg-2">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ asset('img/arvore_paisagem.jpg') }}" class="img-fluid rounded-start-4 " alt="..." style="height:100%;object-fit: cover;">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <br>
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card</p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>

                @livewire('card-user-profissional')
            </div>
        </div>
    </body>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

   <!-- simplebar js -->
    <script src="assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="assets/js/sidebar-menu.js"></script>
    <!-- loader scripts -->
    <script src="assets/js/jquery.loading-indicator.js"></script>
    <!-- Custom scripts -->
    <script src="assets/js/app-script.js"></script>
    <!-- Chart js -->

    <script src="assets/plugins/Chart.js/Chart.min.js"></script>

    <!-- Index js -->
    <script src="{{ asset('assets/js/index.js') }}"></script>
</html>
