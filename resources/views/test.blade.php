@extends('layouts.main')

@section('title')
    Home
@endsection

@section('content')

    <body>

    <!-- ========================================= Start Hero -->

    <section id="skriningMandiri" name='skriningMandiri' class="hero section-padding bg-gray" data-scroll-index="1"
             padding-top: 20px;>
        <div class="container">
            <div class="row">

                <div class="offset-lg-1 col-lg-10">
                    <div class="intro text-center mb-80">
                        <h3>Daftar Tes Kesehatan Jiwa Daring</h3>
                        <p>Skrining ini hanya untuk mengetahui kondisi kesehatan jiwa Anda, bukan sebagai diagnosis.
                            Konsultasi lebih lanjut hasil skrining Anda ke profesional kesehatan jiwa.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-centered">
                    @if($srq->isEmpty())
                        <a href="/testsrq">
                            @else
                                <a href="/resultsrq">
                                    @endif
                                    <div class="item text-center mb-md50">
                                        <div class="img-overlay bg-img" data-overlay-dark="7"
                                             data-background="img/SRQ.jpg"></div>
                                        <span class="icon ti-desktop"></span>
                                        <h6>Self Rating Questioner (SRQ)</h6>
                                        <p>SRQ adalah instrumen penilaian untuk mengidentifikasi seseorang mengalami
                                            masalah mental-emosional</p>
                                        <br>
                                        @if($srq->isEmpty())
                                            <p><b class="buttonoverlay">Mulai</b></p>
                                        @else
                                            <p><b class="buttonoverlay">Anda telah mengambil Tes ini, Lihat Hasil</b>
                                            </p>
                                        @endif
                                    </div>
                                </a>
                        </a>
                </div>

                <div class="col-lg-4 col-md-6 col-centered">
                    @if($bdi->isEmpty())
                        <a href="/testbdi">
                            @else
                                <a href="/resultbdi">
                                    @endif
                                    <div class="item text-center mb-md50">
                                        <div class="img-overlay bg-img" data-overlay-dark="7"
                                             data-background="img/BDI.jpg"></div>
                                        <span class="icon ti-thought "></span>
                                        <h6>Beck Depression Inventory - II (BDI-II)</h6>
                                        <p>BDI adalah instrumen penilaian untuk mengidentifikasi depresi yang dialami
                                            oleh seseorang</p>
                                        <br>
                                        @if($bdi->isEmpty())
                                            <p><b class="buttonoverlay">Mulai</b></p>
                                        @else
                                            <p><b class="buttonoverlay">Anda telah mengambil Tes ini, Lihat Hasil</b>
                                            </p>
                                        @endif
                                    </div>
                                </a>
                        </a>
                </div>

                <div class="col-lg-4 col-md-6 col-centered">
                    @if($dass->isEmpty())
                        <a href="/testdass">
                            @else
                                <a href="/resultdass">
                                    @endif
                                    <div class="item text-center mb-md50">
                                        <div class="img-overlay bg-img" data-overlay-dark="7"
                                             data-background="img/DASS.jpg"></div>
                                        <span class="icon ti-pencil-alt"></span>
                                        <h6>Depression Anxiety Stress Scale (DASS)</h6>
                                        <p>DASS adalah instrumen penilaian untuk mengidentifikasi depresi, kecemasan,
                                            dan stress yang dialami oleh seseorang</p>
                                        <br>
                                        @if($dass->isEmpty())
                                            <p><b class="buttonoverlay">Mulai</b></p>
                                        @else
                                            <p><b class="buttonoverlay">Anda telah mengambil Tes ini, Lihat Hasil</b>
                                            </p>
                                        @endif
                                    </div>
                                </a>
                        </a>
                </div>
                <br><br>
                <div class="col-lg-4 col-md-6 col-centered" style="padding-top: 30px">
                    @if($mmpi->isEmpty())
                        <a href="/mmpi">
                            @else
                                <a href="{{route('mmpi.user')}}">
                                    @endif
                                    <div class="item text-center mb-md50">
                                        <div class="img-overlay bg-img" data-overlay-dark="7"
                                             data-background="img/DASS.jpg"></div>
                                        <span class="icon ti-pencil-alt"></span>
                                        <h6>MMPI</h6>
                                        <p>MMPI tes psikometri yang digunakan untuk mengukur psikopatologi orang dewasa
                                            di dunia</p>
                                        <br>
                                        @if($mmpi->isEmpty())
                                            <p><b class="buttonoverlay">Mulai</b></p>
                                        @else
                                            <p><b class="buttonoverlay">Anda telah mengambil Tes ini, Lihat Hasil</b>
                                            </p>
                                        @endif
                                    </div>
                                </a>
                        </a>
                </div>

                <div class="col-lg-4 col-md-6 col-centered" style="padding-top: 30px">
                    @if($mini->isEmpty())
                        <a href="/mini">
                            @else
                                <a href="/resultmini">
                                    @endif
                                    <div class="item text-center mb-md50">
                                        <div class="img-overlay bg-img" data-overlay-dark="7"
                                             data-background="img/DASS.jpg"></div>
                                        <span class="icon ti-pencil-alt"></span>
                                        <h6>MINI</h6>
                                        <p>MINI adalah psikoedukasi untuk mengetahui gejala karakteristik gangguan
                                            jiwa</p>
                                        <br>
                                        @if($mini->isEmpty())
                                            <p><b class="buttonoverlay">Mulai</b></p>
                                        @else
                                            <p><b class="buttonoverlay">Anda telah mengambil Tes ini, Lihat Hasil</b>
                                            </p>
                                        @endif
                                    </div>
                                </a>
                        </a>
                </div>

            </div>
        </div>
    </section>

    <!-- End Hero =========================================== -->
@endsection
