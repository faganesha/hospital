@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Tes BDI</h1>
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
				<th colspan="4">
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
				{{$test->a}}
			</td>
			<td>
				{{$test->b}}
			</td>
			<td>
				{{$test->c}}
			</td>
			<td>
				{{$test->d}}
			</td>
			<td>
				<a href="{{ route('test.delete',$test->id) }}">Delete</a>
			</td>
		</tr>
		@endforeach
		<tr>
			<button onclick="location.href='/addbditest'" type="button" >Tambah</button>
		</tr>

	</table>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
