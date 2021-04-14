@extends('layouts.main')

@section('title')
    Test
@endsection

@section('content')

    <section>
        <div class="container" style="padding-bottom: 100px">
            <div class="row justify-content-center">
                <center>
                    <br><br><br>
                    <h6 class="h5weak">MMPI</h6>
                    <h3>Skrining Gangguan Mental</h3>
                </center>

                <div class="col-12 pl-8 ">
                    <div class="card-body">
                        <div style="height: 600px; overflow-y:scroll;">
                            <table class="table table-bordered table-hover" id="example">
                                <thead class="thead-dark">
                                <tr>
                                    <th class="align-middle">No</th>
                                    <th style="width: 70%" class="align-middle">
                                        Pertanyaan
                                    </th>
                                    <th style="width: 10%;">
                                        Jawaban
                                    </th>
                                    <th>
                                        Indikasi
                                    </th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($minis as $index => $mini)
                                    <tr>
                                        <td>
                                            {{$index+1}}
                                        </td>
                                        <td>
                                            {{$mini->result->question}}
                                        </td>
                                        <td>
                                            @if($mini->answer==1)
                                                Yes
                                            @else
                                                No
                                            @endif
                                        </td>
                                        <td>
                                            @if($mini->answer==1)
                                                <div class="text-danger">
                                                    {{$mini->result->indication}}
                                                </div>
                                            @else
                                                <div class="text-primary">
                                                    Tidak Terindikasi Apapun
                                                </div>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm text-center pt-4">
                            <strong>Jika membutuhkan, silahkan menghubungi tenaga kesehatan.</strong>
                            <a href="https://wa.me/62818272255" class="buttonoverlay" style="padding-left: 15px"
                               target="_blank"><u>Klik untuk konsultasi Online<u></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section ('css')
    <link href="{{ asset ('css/creative.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $('.mydatatable').DataTable({
            "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
            "ordering": false
        });
    </script>
@endsection
