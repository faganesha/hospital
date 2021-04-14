@extends('layouts.main')

@section('title')
Test
@endsection

@section('content')


<section>
	<div class="container" style="padding-bottom: 100px">
		
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
		<center>
			<div class="card col-8 p-8 text-left" style="border-bottom: 100px">
				<div class="card-body">

					@foreach ($results as $index => $result)
					<div class="col-sm" style="padding-left: 70px">
						{{$index+1}}. {{$result->result->question}}
					</div>

					<div class="col-sm" style="padding-left: 100px">
						Skor: {{$result->answer}}
					</div><br>
					@endforeach

					<div class="col-sm" style="padding-left: 70px">
						Hasil:
					</div>

					@foreach($consents as $consent)

					<div class="col-sm" style="padding-left: 70px">
						@if($consent->dass_depression >= '1' && $consent->dass_depression <= '9')
						<p style="color: #337ab7">Depresi: Normal</p>
						@elseif($consent->dass_depression >= '10' && $consent->dass_depression <= '13')
						<p style="color: #337ab7">Depresi: Mild</p>
						@elseif($consent->dass_depression >= '14' && $consent->dass_depression <= '20')
						<p style="color: #337ab7">Depresi: Moderate</p>
						@elseif($consent->dass_depression >= '21' && $consent->dass_depression <= '27')
						<p style="color: crimson">Depresi: Severe</p>
						@elseif($consent->dass_depression >= '28')
						<p style="color: crimson">Depresi: Extreme Severe</p>
						@else
						<p class="text-success">Depresi: Belum diproses</p>
						@endif
					</div>

					<div class="col-sm" style="padding-left: 70px">
						@if($consent->dass_anxiety >= '1' && $consent->dass_anxiety <= '7')
						<p style="color: #337ab7">Kecemasan: Normal</p>
						@elseif($consent->dass_anxiety >= '8' && $consent->dass_anxiety <= '9')
						<p style="color: #337ab7">Kecemasan: Mild</p>
						@elseif($consent->dass_anxiety >= '10' && $consent->dass_anxiety <= '14')
						<p style="color: #337ab7">Kecemasan: Moderate</p>
						@elseif($consent->dass_anxiety >= '15' && $consent->dass_anxiety <= '19')
						<p style="color: crimson">Kecemasan: Severe</p>
						@elseif($consent->dass_anxiety >= '20')
						<p style="color: crimson">Kecemasan: Extremely Severe</p>
						@else
						<p class="text-success">Belum diproses</p>
						@endif
					</div>

					<div class="col-sm" style="padding-left: 70px">
						@if($consent->dass_stress >= '1' && $consent->dass_stress <= '14')
						<p style="color: #337ab7">Stres: Normal</p>
						@elseif($consent->dass_stress >= '15' && $consent->dass_stress <= '18')
						<p style="color: #337ab7">Stres: Mild</p>
						@elseif($consent->dass_stress >= '19' && $consent->dass_stress <= '25')
						<p style="color: #337ab7">Stres: Moderate</p>
						@elseif($consent->dass_stress >= '26' && $consent->dass_stress <= '33')
						<p style="color: crimson">Stres: Severe</p>
						@elseif($consent->dass_stress >= '34')
						<p style="color: crimson">Stres: Extremly Severe</p>
						@else
						<p class="text-success">Belum diproses</p>
						@endif
					</div>
					@endforeach
					
				</div>
			</div>

			<div class="card col-8 p-8 text-left" style="border-bottom: 100px; border-top: 20px">
				<div class="card-body">
					<div class="col-sm" style="padding-left: 70px">
						Jika dari salah satu variabel anda terindikasi memiliki masalah psikologis yang ditandai oleh tulisan berwarna merah, harap menghubungi tenaga kesehatan <br> <br>
						<a href="https://wa.me/62818272255" class="buttonoverlay" target="_blank"><u>Klik untuk konsultasi Online<u></a>
					</div>
				</div>
			</div>
		</center>
	</div>
</div>
</section>


@endsection

@section ('css')
<link href="{{ asset ('css/creative.min.css') }}" rel="stylesheet">

@endsection

