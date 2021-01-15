@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Hasil Tes SRQ</h1>
@stop

@section('content')
<div class="container-fluid">

	<table class="table table-bordered">
		<thead class="thead-dark">
			<tr>
				<th class="align-middle">
					NIK Pasien
				</th>
				<th class="align-middle"> 
					Nama
				</th>
				<th>
					Perusahaan
				</th>
				<th>
					Jenis Kelamin
				</th>
				<th class="text-center">
					Status Tes
				</th>
			</tr>
		</thead>

		@foreach ($srqtes as $consent)

		<tr>
			<td>
				{{$consent->user->nik}}
			</td>
			<td>
				<a href="{{route('testdetail', ['id'=>$consent->user->id])}}" style="color: black"><u>{{$consent->user->name}}</u></a>
			</td>
			<td>
				{{$consent->user->company}}
			</td>
			<td>
				{{$consent->user->gender}}
			</td>
			<td>
				@if($consent->status == 'Tidak lulus SRQ')
				<p style="color: crimson">{{$consent->status}}</p>
				@else
				<p style="color: #337ab7">{{$consent->status}}</p>
				@endif
			</td>
		</tr>
		<tr>
			<td>
				<button onclick="location.href='/printtest'" type="button" >Print</button>
			</td>
		</tr>

		@endforeach

	</table>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
