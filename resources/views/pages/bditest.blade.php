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


					<h6 class="h5weak">BDI – II</h6>
					<h3>Skrining Gangguan Mental</h3><br>
					<p class="pstrong">
						Kuesioner berikut ini terdiri dari 21 kelompok pernyataan. Mohon setiap kelompok pernyataan dibaca dengan cermat, setelah itu di dalam setiap kelompok pilih satu dari pernyataan yang paling menggambarkan perasaan anda selama 2 minggu terakhir, termasuk hari ini. Lingkarilah angka di samping pernyataan yang anda pilih. Apabila di dalam satu kelompok terdapat beberapa pernyataan yang terasa sama, lingkarilah angka yang paling tinggi dari pernyataan-pernyataan yang  terasa sama tersebut. Pastikan bahwa anda tidak memilih lebih dari satu pernyataan di dalam setiap kelompok, termasuk pernyataan 16 (Perubahan pola tidur) dan pernyataan 18 (Perubahan selera makan).
					</p>

					
				</div>
			</div>

			<div class="card col-8 pl-8 ">
				<div class="card-body">

					<form method="POST" action="{{url('test/insert')}}">
						{{csrf_field()}}


						@foreach ($tests as $index => $test)
						<div class="col" style="padding-left: 70px">
							{{$index+1}}. {{$test->question}}
						</div>
						<div class="form-group" style="padding-left: 100px">
							<input  type="radio" name="answer[{{$test->id}}]" id="yes" value="0">
							<label for="yes">0. {{$test->a}}</label>

							<br>

							<input type="radio"  name="answer[{{$test->id}}]" id="no" value="1">
							<label  for="yes">1. {{$test->b}}</label>

							<br>

							<input type="radio"  name="answer[{{$test->id}}]" id="no" value="2">
							<label  for="yes">2. {{$test->c}}</label>

							<br>

							<input type="radio"  name="answer[{{$test->id}}]" id="no" value="3">
							<label  for="yes">3. {{$test->d}}</label>


						</div>

						<input type="hidden" name="testid[]" value="{{$test->id}}">
						
						@endforeach

						<input type="hidden" name="category_id" value="{{$test->category_id}}">

						<div class="row text-center">
							<div class="col">
								<input type="submit" name="submitTest" value="Submit" class="btn buttonoverlay">
							</div>
						</div>
					</form>

				</div>
			</div>

		</div>
	</div>
</section>
@endsection

@section ('css')
<link href="{{ asset ('css/creative.min.css') }}" rel="stylesheet">

@endsection

