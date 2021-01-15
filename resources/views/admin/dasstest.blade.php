@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Tes Dass</h1>
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
				<th scope="col" colspan="4">
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
				<label for="yes">0</label>
			</td>
			<td>
				<input type="radio" name="">
				<label for="yes">1</label>
			</td>
			<td>
				<input type="radio" name="">
				<label for="yes">2</label>
			</td>
			<td>
				<input type="radio" name="">
				<label for="yes">3</label>
			</td>
			<td>
				<a href="{{ route('test.delete',$test->id) }}">Delete</a>
			</td>
		</tr>
		@endforeach
		<tr>
			<button onclick="location.href='/adddasstest'" type="button" >Tambah</button>
		</tr>

	</table>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
