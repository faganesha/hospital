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
					<h6 class="h5weak">Tes BDI</h6>
					<h3>Skrining Gangguan Mental</h3>
					<p class="pstrong">
						Skoring:
						<center>
							<table class="table" style="width: 500px;">
								<tr>
									<td>
										1-10
									</td>
									<td>
										:
									</td>
									<td>
										Naik turunnya perasaan ini tergolong normal
									</td>
								</tr>
								<tr>
									<td>
										11-16
									</td>
									<td>
										:
									</td>
									<td>
										Gangguan mood ringan atau perasaan murung ringan
									</td>
								</tr>
								<tr>
									<td>
										17-20
									</td>
									<td>
										:
									</td>
									<td>
										Batas Depresi
									</td>
								</tr>
								<tr>
									<td>
										21-30
									</td>
									<td>
										:
									</td>
									<td>
										Depresi Rendah
									</td>
								</tr>
								<tr>
									<td>
										31-40
									</td>
									<td>
										:
									</td>
									<td>
										Depresi Sedang
									</td>
								</tr>
								<tr>
									<td>
										>40
									</td>
									<td>
										:
									</td>
									<td>
										Depresi Ekstrem
									</td>
								</tr>
							</table>
						</center>
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

					@if($result->answer == 0)

					<div class="col-sm" style="padding-left: 100px">
						Skor: 0
					</div><br>

					@elseif($result->answer == 1)


					<div class="col-sm" style="padding-left: 100px">
						Skor: 1
					</div><br>

					<?php
					$x++;
					?>

					@elseif($result->answer == 2)


					<div class="col-sm" style="padding-left: 100px">
						Skor: 2
					</div><br>

					<?php
					$x+=2;
					?>

					@else

					<div class="col-sm" style="padding-left: 100px">
						Skor: 3
					</div><br>

					<?php
					$x+=3;
					?>

					@endif

					@endforeach

					<form method="POST" action="{{url('consent/insert')}}">
						{{csrf_field()}}

						@if($x<=10)
						<div class="col-sm text-primary" style="padding-left: 70px">
							<input type="hidden" name="status" value="BDI: Lulus BDI">
							<input type="hidden" name="comment" value="Naik turunnya perasaan ini tergolong normal">
							<input type="hidden" name="category_id" value="3">
						</div>

						@elseif($x>=11 && $x<=16)

						<div class="col-sm text-danger" style="padding-left: 70px">
							<input type="hidden" name="status" value="BDI: Lulus BDI">
							<input type="hidden" name="comment" value="Gangguan mood ringan atau perasaan murung ringan">
							<input type="hidden" name="category_id" value="3">
						</div>

						@elseif($x>=17 && $x<=20)

						<div class="col-sm text-danger" style="padding-left: 70px">
							<input type="hidden" name="status" value="BDI: Lulus BDI">
							<input type="hidden" name="comment" value="Batas Depresi">
							<input type="hidden" name="category_id" value="3">
						</div>

						@elseif($x>=21 && $x<=30)

						<div class="col-sm text-danger" style="padding-left: 70px">
							<input type="hidden" name="status" value="BDI: Tidak Lulus BDI">
							<input type="hidden" name="comment" value="Depresi Rendah">
							<input type="hidden" name="category_id" value="3">
						</div>

						@elseif($x>=31 && $x<=40)

						<div class="col-sm text-danger" style="padding-left: 70px">
							<input type="hidden" name="status" value="BDI: Tidak Lulus BDI">
							<input type="hidden" name="comment" value="Depresi Sedang">
							<input type="hidden" name="category_id" value="3">
						</div>

						@elseif($x>=41)

						<div class="col-sm text-danger" style="padding-left: 70px">
							<input type="hidden" name="status" value="BDI: Tidak Lulus BDI">
							<input type="hidden" name="comment" value="Depresi Berat">
							<input type="hidden" name="category_id" value="3">
						</div>
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