@extends('layouts.main')

@section('title')
Test
@endsection

@section('content')


<section>
	<div class="container" style="padding-bottom: 100px">
		
		<div class="row justify-content-center">
			<div class="offset-lg-1 col-lg-10">
				<div class="intro text-center mb-80">
					<br><br><br>
					<h6 class="h5weak">Self Rating Questioner (SRQ)</h6>
					<h3>Skrining Gangguan Mental</h3>
					<p class="pstrong">
						Bila skor 6 atau lebih (Balitbang, Kemenkes RI), segera menghubungi tenaga kesehatan terdekat untuk konsultasi.
					</p>
				</div>
			</div>


			<div class="card col-8 p-8" style="border-bottom: 100px; width: 100px;">
				<div class="card-body">

					@php($x = 0)

					@foreach ($results as $index => $result)
					<div class="col-sm" style="padding-left: 70px">
						{{$index+1}}. {{$result->result->question}}
					</div>

					<div class="col-sm" style="padding-left: 100px">
						{{$result->answer==1?'Ya':'Tidak'}}
					</div><br>

					@if($result->answer==1)
					<?php
					$x++
					?>
					@endif

					@endforeach

					@if($x<=6)
					<div class="col-sm text-primary" style="padding-left: 70px">
						Skor: {{$x}}
						Kesimpulan: Tidak harus menghubungi tenaga kesehatan.
					</div>

					@else

					<div class="col-sm text-danger" style="padding-left: 70px">
						Skor: {{$x}}
						Kesimpulan: Harus menghubungi tenaga kesehatan.
					</div>

					<br>

					<a href="https://wa.me/6285157621774" class="buttonoverlay" style="padding-left: 70px" target="_blank"><u>Klik untuk konsultasi Online<u></a>

						@endif
					</div>
				</div>
			</div>
		</div>
	</section>


	@endsection

	@section ('css')
	<link href="{{ asset ('css/creative.min.css') }}" rel="stylesheet">

	@endsection

	@push('script')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> </script>
	<script src="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css"> </script>
	@endpush

