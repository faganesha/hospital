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
					<h6 class="h5weak">Tes Dass</h6>
					<h3>Skrining Gangguan Mental</h3>
					<p class="pstrong">
						Skoring dilakukan dengan menjumlahkan total skor dari tiap item yang diisi responden di setiap skala kemudian dikalikan 2. Semakin tinggi skor, maka semakin tinggi juga gejala distress yang dialami. Berikut adalah panduan kategorinya berdasarkan sumber referensi dari Lovibond. 
					</p>

					<br><br>

					<div class="col-lg-4 col-md-6 col-centered">
						Stress <br>
						Normal ............................. 0-14 <br>
						Mild .................................. 15-18 <br>
						Moderate ......................... 19-25 <br>
						Severe ............................. 26-33 <br>
						Extremely severe............. 34+ <br><br>
					</div>

					<div class="col-lg-4 col-md-6 col-centered">
						Anxiety <br>
						Normal ............................. 0-7 <br>
						Mild .................................. 8-9 <br>
						Moderate......................... 10-14 <br>
						Severe............................. 15-19 <br>
						Extremely severe............. 20+ <br><br>
					</div>

					<div class="col-lg-4 col-md-6 col-centered">
						Depression <br>
						Normal ............................. 0-9 <br>
						Mild.................................. 10-13<br>
						Moderate......................... 14-20 <br>
						Severe............................. 21-27 <br>
						Extremely severe............. 28+ <br><br>
					</div>
				</div>
			</div>


			<div class="card col-8 p-8" style="border-bottom: 100px">
				<div class="card-body">

					<h6 class="text-center">
						Jawaban dari tes dass yang telah dikerjakan
					</h6><br>

					@foreach ($results as $index => $result)
					<div class="" style="padding-left: 70px">
						{{$index+1}}. {{$result->result->question}}: 
					</div>

					<div class="" style="padding-left: 100px; padding-bottom: 10px">
						Skala: {{$result->answer}}
					</div>
					@endforeach


					<form method="POST" action="{{url('consent/insert')}}">
						{{csrf_field()}}
							<input type="hidden" name="status" value="Dass: Dalam Proses">
							<input type="hidden" name="comment" value="Masih dalam proses pemeriksaan">
							<input type="hidden" name="category_id" value="2">
					</div>

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
