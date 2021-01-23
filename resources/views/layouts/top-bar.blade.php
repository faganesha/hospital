<meta charset="UTF-8">
<title>Title</title>
</head>
<body>

    <!-- =====================================
        ==== Start Loading -->


        
        <!-- End Loading ====
            ======================================= -->

            <!-- ========================================= Start Navbar -->

            <nav class="navbar navbar-expand-lg">
                <div class="container">

                    <!-- Logo -->
                    <a class="logo" href="/home">
                        <img src="img/logo-light.png" width="70" height="70" alt="logo">          
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"><i class="fas fa-bars"></i></span>
                    </button>

                    <!-- navbar links -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item">
                            <a class="nav-link active" href="/home" >Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home#skriningMandiri" >Skrining Mandiri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home#tentangKami" >Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home#kontakKami" >Kontak Kami</a>
                        </li>

                    </li>

                    @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: #000000">Hi, {{Auth::user()->name}}</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell" style="color:black"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="head text-light bg-dark">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-12">
                                        <span>Notifications</span>
                                        <!-- <a href="" class="float-right text-light">Mark all as read</a> -->
                                    </div>
                                </div>
                            </li>

                            @foreach($consents as $consent)

                            <li class="notification-box">
                                <div class="row">  
                                    <div class="col-lg-8 col-sm-8 col-8">
                                        <strong style="font-size:80%;">{{$consent->status}}</strong>
                                        <div style="font-size:80%;width: 400px;">
                                            {{$consent->comment}}
                                        </div>
                                    </div>
                                </div>
                            </li>

                            @endforeach

                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/logout" style="color: #000000"> Keluar </a>
                    </li>
                    @else

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/login" style="color: #000000">Masuk</a>
                    </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>