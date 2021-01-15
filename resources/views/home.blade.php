@extends('layouts.main')

@section('title')
Home
@endsection

@section('content')

<body>

 <!-- ========================================= Start Header -->

 <header class="header valign bg-img" data-scroll-index="0" data-overlay-dark="5" data-background="img/bg1.jpg" data-stellar-background-ratio="0.5">

  <div class="container">
     <div class="row">
        <div class="full-width text-center caption mt-30">
           <h4>Semedi</h4>
           <h1>Selalu mendampingi dirimu</h1>
           <p>Kami hadir dan selalu mendampingi Anda kapan pun, dimana pun. Ikuti Self-Assesement dan konsultasikan kesehatan jiwa Kamu bersama kami</p>
           <a href="#1" class="butn butn-light mt-30">
            <span>Learn More</span>
        </a>
        <a href="#2" class="butn butn-bg mt-30">
            <span>Get Started</span>
        </a>
    </div>
</div>
</div>
</header>

<!-- End Header =========================================== -->



<!-- ========================================= Start Hero -->

<section  id="skriningMandiri" class="hero section-padding bg-gray" data-scroll-index="1">
    <div class="container">
        <div class="row">

            <div class="offset-lg-1 col-lg-10">
                <div class="intro text-center mb-80">
                    <h5>About Our Agency</h5>
                    <h3>We love what we do & we do it with passion!</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book It has survived not only five centuries.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-centered">
                @if($srq->isEmpty())
                <a href="/testsrq">
                    @else
                    <a href="/resultsrq">
                        @endif
                        <div class="item text-center mb-md50">
                            <div class="img-overlay bg-img" data-overlay-dark="7" data-background="img/1.jpg"></div>
                            <span class="icon ti-desktop"></span>
                            <h6>Self Rating Questioner (SRQ)</h6>
                            <p>SRQ adalah instrumen penilaian untuk mengidentifikasi seseorang mengalami masalah mental-emosional</p>
                            <br>
                            @if($srq->isEmpty())
                            <p><b class="buttonoverlay">Mulai</b></p>
                            @else
                            <p><b class="buttonoverlay">Anda telah mengambil Tes ini,Lihat Hasil</b></p>
                            @endif
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-centered">
                    <a href="/testbdi">
                        <div class="item text-center mb-md50">
                            <div class="img-overlay bg-img" data-overlay-dark="7" data-background="img/2.jpg"></div>
                            <span class="icon ti-shield"></span>
                            <h6>BDI Test</h6>
                            <p>SRQ adalah instrumen penilaian untuk mengidentifikasi seseorang mengalami masalah mental-emosional</p>
                            <br>
                            <p><b class="buttonoverlay">Mulai</b></p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-centered">
                    <a href="/testdass">
                        <div class="item text-center mb-md50">
                            <div class="img-overlay bg-img" data-overlay-dark="7" data-background="img/2.jpg"></div>
                            <span class="icon ti-shield"></span>
                            <h6>Dass Test</h6>
                            <p>SRQ adalah instrumen penilaian untuk mengidentifikasi seseorang mengalami masalah mental-emosional</p>
                            <br>
                            <p><b class="buttonoverlay">Mulai</b></p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- End Hero =========================================== -->


    <!-- ========================================= Start Teams -->

    <section id="tentangKami" class="team section-padding" data-scroll-index="2">
        <div class="container">
            <div class="row">

                <div class="section-head text-center col-sm-12">
                    <h4>Tentang Kami</h4>
                </div>

                <div class="owl-carousel owl-theme text-center offset-lg-1 col-lg-10">
                    <div class="item">
                        <div class="team-img">
                            <img src="img/team/1.jpg" alt="">
                        </div>
                        <h6>dr. Teddy Hidayat, Sp.KJ(K)</h6>
                        <span>Project Manager</span>
                    </div>

                    <div class="item">
                        <div class="team-img">
                            <img src="img/team/2.jpg" alt="">
                        </div>
                        <h6>dr. Elvine Gunawan, Sp.KJ</h6>
                        <span>Front-End Developer</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Teams =========================================== -->

        <!-- ========================================= Start Contact -->

        <section id="kontakKami" class="contact section-padding" data-scroll-index="3">
            <div class="container">
                <div class="row">

                    <div class="section-head text-center col-sm-12">
                        <h4>Hubungi Kami</h4>
                    </div>

                    <div class="info col-lg-12 mb-80">
                        <div class="row">

                            <div class="col-lg-4">
                                <div class="item mb-md30">
                                    <div class="img-overlay bg-img" data-overlay-dark="8" data-background="img/4.jpg"></div>
                                    <span class="icon ti-desktop"></span>
                                    <div class="cont">
                                        <h6>Konsultasi</h6>
                                        <p><a href="https://wa.me/6285157621774" target="_blank">Klik untuk konsultasi Online</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="item mb-md30">
                                    <div class="img-overlay bg-img" data-overlay-dark="8" data-background="img/2.jpg"></div>
                                    <span class="icon ti-desktop"></span>
                                    <div class="cont">
                                        <h6>Email : </h6>
                                        <p>ruangtengah@gmail.com</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="item">
                                    <div class="img-overlay bg-img" data-overlay-dark="8" data-background="img/3.jpg"></div>
                                    <span class="icon ti-desktop"></span>
                                    <div class="cont">
                                        <h6>Address : </h6>
                                        <p><a class="buttonoverlay" href="http://maps.google.com/?q=Rumah Sakit Melinda 2, Jalan Doktor Cipto, Pasirkaliki, Bandung City, West Java" target="_blank">RS Melinda 2 Bandung</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Contact ====
            ======================================= -->


            @endsection