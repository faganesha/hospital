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


			<div class="card col-8 p-8" style="border-bottom: 100px">
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

					<form method="POST" action="{{url('consent/insert')}}">
						{{csrf_field()}}

						@if($x>=6)
						<div class="col-sm text-primary" style="padding-left: 70px">
							<input type="hidden" name="status" value="SRQ: Tidak lulus SRQ">
							<input type="hidden" name="comment" value="Silahkan menghubungi kami untuk konsultasi">
							<input type="hidden" name="category_id" value="1">
						</div>

						@else

						<div class="col-sm text-danger" style="padding-left: 70px">
							<input type="hidden" name="status" value="SRQ: Lulus SRQ">
							<input type="hidden" name="comment" value="Tidak perlu konsultasi">
							<input type="hidden" name="category_id" value="1">
						</div>

						<!-- <a href="https://wa.me/6285157621774" style="padding-left: 70px" target="_blank">Klik untuk konsultasi Online</a> -->
					</div>
					@endif

					<div class="row-sm" style="padding-left: 70px">
						Semua data pasien akan dijaga kerahasiannya.
						Klik Buka untuk melihat hasil tes.<br>
					</div>

					<div class="row text-center" style="padding-top: 30px">
						<div class="col">
							<input type="submit" name="submitConsent" value="Buka" class="btn buttonoverlay">
						</div>
					</div>

				</form>



			</div>
		</div>
	</div>
</section>


@endsection

@section ('css')
<link href="{{ asset ('css/creative.min.css') }}" rel="stylesheet">

@endsection