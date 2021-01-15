@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Detail Tes SRQ</h1>
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
					Jawaban
				</th>
			</tr>
		</thead>

		@php($x = 0)

		@foreach ($results as $index => $result)
		<tr>
			<td>
				{{$index+1}}
			</td>
			<td>
				{{$result ->result->question}}
			</td>
			<td>
				@if($result->answer == 1)
				Ya
				@else
				Tidak
				@endif
			</td>
		</tr>

		@if($result->answer==1)
		<?php
		$x++
		?>
		@endif
		@endforeach

		<tr>
			<td colspan="2">
				<strong>Status</strong>
			</td>
			<td>
				@if($x>=6)
				<p style="color: #337ab7"><strong>Lulus</strong></p>
				@else
				<p style="color: crimson"><strong>Tidak lulus</strong></p>
				@endif
			</td>
		</tr>

		

	</table>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop