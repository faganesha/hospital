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

                <a href="#skriningMandiri" class="butn butn-bg mt-30">
                    <span>Mulai</span>
                </a>
            </div>
        </div>
    </div>
</header>

<!-- End Header =========================================== -->



<!-- ========================================= Start Hero -->

<section  id="skriningMandiri" name='skriningMandiri' class="hero section-padding bg-gray" data-scroll-index="1">
    <div class="container">
        <div class="row">

            <div class="offset-lg-1 col-lg-10">
                <div class="intro text-center mb-80">
                    <h5>Se.Me.Di</h5>
                    <h3>Program Kesehatan Jiwa Daring</h3>
                    <a href="/test" class="butn mt-30">
                        <span >Ketuk disini untuk memulai tes</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Hero =========================================== -->


<!-- ========================================= Start Teams -->

<section id="tentangKami" name='tentangKami' class="team section-padding" data-scroll-index="2">
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
                    <span>Psikiater di RS Melinda 2</span>
                </div>

                <div class="item">
                    <div class="team-img">
                        <img src="img/team/2.jpg" alt="">
                    </div>
                    <h6>dr. Elvine Gunawan, Sp.KJ</h6>
                    <span>Psikiater di RS Melinda 2</span>
                </div>

                <div class="item">
                    <div class="team-img">
                        <img src="img/team/3.jpg" alt="">
                    </div>
                    <h6>Dr.Ira Adriati.,S.Sn.,M.Sn</h6>
                    <span>Dosen Program Studi Seni Rupa FSRD ITB</span>
                </div>

                <div class="item">
                    <div class="team-img">
                        <img src="img/team/4.jpg" alt="">
                    </div>
                    <h6>Dr. Irma Damajanti, M.Sn.</h6>
                    <span>Dosen Program Studi Seni Rupa FSRD ITB</span>
                </div>
            </div>
        </div>
    </section>

    <!-- End Teams =========================================== -->

    <!-- ========================================= Start Contact -->

    <section id="kontakKami" name='kontakKami' class="contact section-padding" data-scroll-index="3">
        <div class="container">
            <div class="row">

                <div class="section-head text-center col-sm-12">
                    <h4>Hubungi Kami</h4>
                </div>

                <div class="info col-lg-12 mb-80">
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="item mb-md30">
                                <div class="img-overlay bg-img" data-overlay-dark="8" style="height: 167px;" data-background="img/BDI.jpg"></div>
                                <span class="icon ti-desktop"></span>
                                <div class="cont">
                                    <h6>Konsultasi</h6>
                                    <p>
                                        <i class="whatsapp ti-mobile"> </i><a style="color: #e9967a" href="https://wa.me/62818272255" target="_blank"> Admin via WA</a> <br>
                                       <!--  <a href="https://wa.me/6285321948384" class="whatsapp ti-mobile" target="_blank"> Admin 2</a>
                                        <a href="https://wa.me/6285321948381" class="whatsapp ti-mobile" target="_blank"> Admin 3</a> -->
                                        <i class="whatsapp ti-mobile"> </i><a style="color: #e9967a" href="/qrcode">Admin via Line</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="item mb-md30">
                                <div class="img-overlay bg-img" style="height: 167px;" data-overlay-dark="8" data-background="img/SRQ.jpg"></div>
                                <span class="icon ti-desktop"></span>
                                <div class="cont">
                                    <h6>Email: </h6>
                                    <p style="font-size: 13px">ruangtengahsemedi@gmail.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="item">
                                <div class="img-overlay bg-img" style="height: 167px;" data-overlay-dark="8" data-background="img/DASS.jpg"></div>
                                <span class="icon ti-desktop"></span>
                                <div class="cont">
                                    <h6>Youtube: </h6>
                                    <p><a class="buttonoverlay" href="https://www.youtube.com/channel/UCPUVFsdm3tNXIh-6mRP1L2g" target="_blank">Psiko Edukasi</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Contact =========================================== -->
    @endsection