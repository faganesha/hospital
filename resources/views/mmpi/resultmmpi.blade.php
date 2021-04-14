@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Hasil Tes MMPI</h1>
@stop

@section('content')
<div class="container-fluid">

	<button onclick="location.href='/printdass'" type="button" class="btn btn-primary">Print</button>

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
					Status
				</th>
			</tr>
		</thead>

		@foreach ($consents as $consent)

		<tr>
			<td>
				{{$consent->user->nik}}
			</td>
			<td>
				<a href="{{route('mmpi.detail', ['id'=>$consent->user->id])}}" style="color: black"><u>{{$consent->user->name}}</u></a>
			</td>
			<td>
				{{$consent->user->company}}
			</td>
			<td>
				{{$consent->user->gender}}
			</td>
			<td>
				{{$consent->status}}
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