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


					<h6 class="h5weak">Tes Dasss</h6>
					<h3>Skrining Gangguan Mental</h3><br>
					<p class="pstrong">
						Kuesioner ini terdiri dari berbagai pernyataan yang mungkin sesuai dengan pengalaman Bapak/Ibu/Saudara dalam menghadapi situasi hidup sehari-hari.  Terdapat empat pilihan jawaban yang disediakan untuk setiap pernyataan yaitu:<br>

						0   :  Tidak sesuai dengan saya sama sekali, atau tidak pernah. <br>
						1   :  Sesuai dengan saya sampai tingkat tertentu, atau kadang kadang. <br>
						2   :  Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering. <br>
						3   :  Sangat sesuai dengan saya, atau sering sekali. <br><br>

						Selanjutnya, Bapak/Ibu/Saudara diminta untuk menjawab dengan cara <strong> memberi tanda silang (X)</strong> pada salah satu kolom yang paling sesuai dengan pengalaman Bapak/Ibu/Saudara selama <strong> satu minggu belakangan</strong> ini.  Tidak ada jawaban yang benar ataupun salah, karena itu isilah sesuai dengan keadaan diri Bapak/Ibu/Saudara yang sesungguhnya, yaitu berdasarkan jawaban pertama yang terlintas dalam pikiran Bapak/Ibu/ Saudara. <br>

					</p>

					
				</div>
			</div>

			<div class="card col-8 pl-8 ">
				<div class="card-body">

					<form method="POST" action="{{url('test/insert')}}">
						{{csrf_field()}}

						<table class="table ">
							<tr>
								<td>
									No
								</td>
								<td>
									Pertanyaan
								</td>
								<td>
									0
								</td>
								<td>
									1
								</td>
								<td>
									2
								</td>
								<td>
									3
								</td>
							</tr>

							@foreach ($tests as $index => $test)

							<tr>
								<td>
									{{$index+1}}
								</td>
								<td>
									{{$test->question}}
								</td>
								<td>
									<input type="radio"  name="answer[{{$test->id}}]" id="0" value="0">
									<label  for="yes"></label>
								</td>
								<td>
									<input type="radio"  name="answer[{{$test->id}}]" id="1" value="1">
									<label  for="yes"></label>
								</td>
								<td>
									<input type="radio"  name="answer[{{$test->id}}]" id="2" value="2">
									<label  for="yes"></label>
								</td>
								<td>
									<input type="radio"  name="answer[{{$test->id}}]" id="3" value="3">
									<label  for="yes"></label>
								</td>
							</tr>

							<input type="hidden" name="testid[]" value="{{$test->id}}">

							@endforeach

						</table>

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

