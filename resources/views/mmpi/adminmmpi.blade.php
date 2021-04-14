@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Tes MMPI</h1>
@stop

@section('content')
<div class="container-fluid">

	<button onclick="location.href='/mmpi/input'"  class="btn btn-primary" type="button" >Tambah</button>

	<br><br>

	<table class="table table-bordered table-hover mydatatable" id="example">
		<thead class="thead-dark">
			<tr>
				<th scope="col"> 
					No
				</th>
				<th scope="col">
					Pertanyaan	
				</th>
				<th colspan="2">
					Jawaban
				</th>
				<th>
					Action
				</th>
			</tr>
		</thead>

		@foreach ($mmpis as $index => $mmpi)
		<tr>
			<td>
				{{$index+1}}
			</td>
			<td>
				{{$mmpi->question}}
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
				<a href="{{ route('mmpi.delete',$mmpi->id) }}">Delete</a>
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
		"lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
	});
</script>
@stop
