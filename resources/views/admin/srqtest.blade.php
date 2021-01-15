@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Tes SRQ</h1>
@stop

@section('content')
<div class="container-fluid">

	<table class="table table-bordered">
		<thead class="thead-dark">
			<tr>
				<th scope="col"> 
					No
				</th>
				<th scope="col">
					Pertanyaan	
				</th>
				<th scope="col" colspan="2">
					Jawaban
				</th>
				<th>
					Action
				</th>
			</tr>
		</thead>

		@foreach ($tests as $index => $test)
		<tr>
			<td>
				{{$index+1}}
			</td>
			<td>
				{{$test->question}}
			</td>
			<td>
				<input type="radio" name="">
				<label for="yes">Ya</label>
			</td>
			<td>
				<input type="radio" name="">
				<label for="yes">Tidak</label>
			</td>
			<td>
				<a href="{{ route('test.delete',$test->id) }}">Delete</a>
			</td>
		</tr>
		@endforeach
		<tr>
			<button onclick="location.href='/addsrqtest'" type="button" >Tambah</button>
		</tr>

	</table>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
