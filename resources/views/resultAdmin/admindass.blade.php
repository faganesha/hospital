@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Hasil Tes DASS</h1>
@stop

@section('content')
<div class="container-fluid">

	<button onclick="location.href='/printtest'" type="button" class="btn btn-primary">Print</button>

	<br><br>

	<table class="table table-bordered table-hover mydatatable" id="example">
		<thead class="thead-dark">
			<tr>
				<th class="align-middle" rowspan="2">
					NIK Pasien
				</th>
				<th class="align-middle" rowspan="2"> 
					Nama
				</th>
				<th class="align-middle" rowspan="2">
					Perusahaan
				</th>
				<th class="align-middle" rowspan="2">
					Jenis Kelamin
				</th>
				<th class="text-center" colspan="3">
					Status Tes
				</th>
			</tr>
			<tr>
				<th>
					Variable Depresi
				</th>
				<th>
					Variable Kecemasan
				</th>
				<th>
					Variable Stres
				</th>
			</tr>
		</thead>

		@foreach ($srqtes as $consent)

		<tr>
			<td>
				{{$consent->user->nik}}
			</td>
			<td>
				<a href="{{route('dasstestdetail', ['id'=>$consent->user->id])}}" style="color: black"><u>{{$consent->user->name}}</u></a>
			</td>
			<td>
				{{$consent->user->company}}
			</td>
			<td>
				{{$consent->user->gender}}
			</td>
			<td>
				@if($consent->dass_depression >= '1' && $consent->dass_depression <= '9')
				<p style="color: #337ab7">Normal</p>
				@elseif($consent->dass_depression >= '10' && $consent->dass_depression <= '13')
				<p style="color: #337ab7">Mild</p>
				@elseif($consent->dass_depression >= '14' && $consent->dass_depression <= '20')
				<p style="color: #337ab7">Moderate</p>
				@elseif($consent->dass_depression >= '21' && $consent->dass_depression <= '27')
				<p style="color: crimson">Severe</p>
				@elseif($consent->dass_depression >= '28')
				<p style="color: crimson">Extreme Severe</p>
				@else
				<p class="text-success">Belum diproses</p>
				@endif
			</td>
			<td>
				@if($consent->dass_anxiety >= '1' && $consent->dass_anxiety <= '7')
				<p style="color: #337ab7">Normal</p>
				@elseif($consent->dass_anxiety >= '8' && $consent->dass_anxiety <= '9')
				<p style="color: #337ab7">Mild</p>
				@elseif($consent->dass_anxiety >= '10' && $consent->dass_anxiety <= '14')
				<p style="color: #337ab7">Moderate</p>
				@elseif($consent->dass_anxiety >= '15' && $consent->dass_anxiety <= '19')
				<p style="color: crimson">Severe</p>
				@elseif($consent->dass_anxiety >= '20')
				<p style="color: crimson">Extremely Severe</p>
				@else
				<p class="text-success">Belum diproses</p>
				@endif
			</td>
			<td>
				@if($consent->dass_stress >= '1' && $consent->dass_stress <= '14')
				<p style="color: #337ab7">Normal</p>
				@elseif($consent->dass_stress >= '15' && $consent->dass_stress <= '18')
				<p style="color: #337ab7">Mild</p>
				@elseif($consent->dass_stress >= '19' && $consent->dass_stress <= '25')
				<p style="color: #337ab7">Moderate</p>
				@elseif($consent->dass_stress >= '26' && $consent->dass_stress <= '33')
				<p style="color: crimson">Severe</p>
				@elseif($consent->dass_stress >= '34')
				<p style="color: crimson">Extremly Severe</p>
				@else
				<p class="text-success">Belum diproses</p>
				@endif
			</td>
		</tr>
		@endforeach
	</table>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
	$('.mydatatable').DataTable({
		 "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
	});
</script>
@stop