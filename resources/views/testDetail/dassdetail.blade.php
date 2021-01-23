@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Detail Tes Dass</h1>
@stop

@section('content')
<div class="container-fluid">

	@foreach ($results as $index => $result)
	@if($loop->iteration == 1)
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$result ->user->name}}</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>:</td>
			<td>{{$result ->user->gender}}</td>
		</tr>
		<tr>
			<td>Perusahaan</td>
			<td>:</td>
			<td>{{$result ->user->company}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$result ->user->address}}</td>
		</tr>
	</table>
	@endif
	@endforeach

	<br>

	<table class="table table-bordered">
		<thead class="thead-dark">
			<tr>
				<th class="align-middle">
					No
				</th>
				<th class="align-middle"> 
					Pertanyaan
				</th>
				<th>
					Skor
				</th>
			</tr>
		</thead>

		@php($x = 0)

		@foreach ($results as $index => $result)
		<tr>
			@if($index+1==1)
			<td style="background-color:#FFA089">
				<p >{{$index+1}}</p>
			</td>
			@elseif($index+1==2)
			<td style="background-color:#68B6F0">
				<p>{{$index+1}}</p>
			</td>
			@elseif($index+1==3)
			<td style="background-color:#9FF068">
				<p>{{$index+1}}</p>
			</td>
			@endif

			@if($index+1==1)
			<td style="background-color:#FFA089">
				<p >{{$result ->result->question}}</p>
			</td>
			@elseif($index+1==2)
			<td style="background-color:#68B6F0">
				<p>{{$result ->result->question}}</p>
			</td>
			@elseif($index+1==3)
			<td style="background-color:#9FF068">
				<p>{{$result ->result->question}}</p>
			</td>
			@endif

			@if($index+1==1)
			<td style="background-color:#FFA089">
				<p >{{$result ->answer}}</p>
			</td>
			@elseif($index+1==2)
			<td style="background-color:#68B6F0">
				<p>{{$result ->answer}}</p>
			</td>
			@elseif($index+1==3)
			<td style="background-color:#9FF068">
				<p>{{$result ->answer}}</p>
			</td>
			@endif
		</tr>
		@endforeach
		<tr>
			<form action="\scoredass" method="post">
				@csrf
				@foreach($dasstests as $dass)

				<td colspan="2">
					Total Skor Variable Depresi
				</td>
				@if($dass->dass_depression == null)
				<td>
					<input type="text" name="dass_depression" style="width: 100%">
				</td>
				@else
				<td>
					{{$dass->dass_depression}}
				</td>
				@endif

			</tr>
			<tr>
				<td colspan="2">
					Total Skor Variable Kecemasan
				</td>
				@if($dass->dass_anxiety == null)
				<td>
					<input type="text" name="dass_anxiety" style="width: 100%">
				</td>
				@else
				<td>
					{{$dass->dass_anxiety}}
				</td>
				@endif
			</tr>
			<tr>
				<td colspan="2">
					Total Skor Variable Stress
				</td>
				@if($dass->dass_stress == null)
				<td>
					<input type="text" name="dass_stress" style="width: 100%">
					<input type="hidden" name="updatestatus" value="Silahkan Cek hasil pada halaman hasil Tes DASS">
					<input type="hidden" value="Dass: Hasil Sudah Keluar" name="status">
					<input type="hidden" name="id" value="{{$dass->id}}">
				</td>
				@else
				<td>
					{{$dass->dass_stress}}
				</td>
				@endif
			</tr>
		</table>

		<input type="submit" class="btn btn-primary" value="Submit" name="submit">
		<a href="{{route('dassedit', ['id'=>$dass->id])}}" class="btn btn-success">Edit Skor</a>
	</form>
	@endforeach
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
