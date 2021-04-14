@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Detail Tes</h1>
@stop

@section('content')
<div class="container-fluid">

	@foreach ($results as $index => $result)
	@if($loop->iteration == 1)
	<table class="table">
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
			<td>
				{{$index+1}}
			</td>
			<td>
				{{$result ->result->question}}
			</td>
			@if($result->answer==0)
			<td>
				0
			</td>
			@elseif($result->answer==1)
			<td>
				1

				<?php
				$x++;
				?>
			</td>
			@elseif($result->answer==2)
			<td>
				2

				<?php
				$x+=2;
				?>
			</td>
				@else
			<td>
				3

				<?php
				$x+=3;
				?>
			</td>
		</tr>


		@endif
		@endforeach

		<tr>
			<td colspan="2">
				Total Skor
			</td>
			<td>
				{{$x}}
			</td>
		</tr>

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

@section('js')
<script>
	$('.mydatatable').DataTable({
		 "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
	});
</script>
@stop