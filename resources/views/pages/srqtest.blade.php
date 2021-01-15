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
					<h3>Skrining Gangguan Mental</h3><br>
					<p class="pstrong">
						1. SRQ adalah instrumen penilaian untuk mengidentifikasi seseorang mengalami masalah mental-emosional. <br>
						2. Jika pertanyaan berikut Anda rasakan setuju pilih "Ya" dan jika tidak setuju pilih "Tidak". <br>
						3. Pada saat menjawab kuesioner jangan membahas dengan siapapun. <br>
						4. Jika ragu berikan jawaban terbaik yang Anda bisa. <br>
						5. Kami ingin menyakinkan bahwa jawaban Anda bersifat rahasia. <br>
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
							<input  type="radio" name="answer[{{$test->id}}]" id="yes" value="1">
							<label for="yes">Ya</label>

							<br>

							<input type="radio"  name="answer[{{$test->id}}]" id="no" value="0">
							<label  for="yes">Tidak</label>
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

