@extends('layouts.main')

@section('title')
Test
@endsection

@section('content')


<section>
	<div class="container" style="padding-bottom: 100px">
		
		<div class="row justify-content-center">
			<div class="intro text-center mb-80">
				<br><br><br>
				<h6 class="h5weak">Tes BDI</h6>
				<h3>Skrining Gangguan Mental</h3><br>
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

			<div class="card col-8 p-8" style="border-bottom: 100px">
				<div class="card-body">

					@php($x = 0)

					<h6 class="text-center">Hasil Tes BDI</h6>

					@foreach ($results as $index => $result)
					<div class="col-sm" style="padding-left: 70px">
						{{$index+1}}. {{$result->result->question}}
					</div>

					<div class="col-sm" style="padding-left: 100px">
						Skor: {{$result->answer}} 

						@if($result->answer == 0)

						@elseif($result->answer == 1)

						<?php
						$x++;
						?>

						@elseif($result->answer == 2)

						<?php
						$x+=2;
						?>

						@else

						<?php
						$x+=3;
						?>

						@endif

					</div>
					@endforeach

					@if($x<=10)
					<div class="col-sm text-primary" style="padding-left: 70px">
						<br>Naik turunnya perasaan ini tergolong normal<br>
						Kesimpulan: Tidak harus menghubungi tenaga kesehatan.
					</div>

					@elseif($x>=11 && $x<=16)

					<div class="col-sm text-primary" style="padding-left: 70px">
						<br>Gangguan mood ringan atau perasaan murung ringan<br>
						Kesimpulan: Tidak harus menghubungi tenaga kesehatan.
					</div>

					@elseif($x>=17 && $x<=20)

					<div class="col-sm text-primary" style="padding-left: 70px">
						<br>Batas Depresi<br>
						Kesimpulan: Tidak harus menghubungi tenaga kesehatan.
					</div>

					@elseif($x>=21 && $x<=30)

					<div class="col-sm" style="padding-left: 70px">
						<br>Depresi Rendah<br>
						Kesimpulan: Disarankan menghubungi tenaga kesehatan.
						<a href="https://wa.me/62818272255" class="buttonoverlay" style="padding-left: 70px" target="_blank"><u>Klik untuk konsultasi Online<u></a>
					</div>

					@elseif($x>=31 && $x<=40)

					<div class="col-sm text-danger" style="padding-left: 70px">
						<br>Depresi Sedang<br>
						Kesimpulan: Wajib menghubungi tenaga kesehatan.
						<a href="https://wa.me/62818272255" class="buttonoverlay" style="padding-left: 70px" target="_blank"><u>Klik untuk konsultasi Online<u></a>
					</div>

					@elseif($x>=41)

					<div class="col-sm text-danger" style="padding-left: 70px">
						<br>Depresi Berat<br>
						Kesimpulan: Wajib menghubungi tenaga kesehatan.
						<a href="https://wa.me/62818272255" class="buttonoverlay" style="padding-left: 70px" target="_blank"><u>Klik untuk konsultasi Online<u></a>
					</div>
				</div>
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

