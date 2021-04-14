@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Hasil Tes SRQ</h1>
@stop

@section('content')
<div class="container-fluid">

	<button onclick="location.href='/printsrq'" type="button" class="btn btn-primary">Print</button>

	<br><br>

	<table class="table table-bordered table-hover mydatatable" id="example">
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
				<a href="{{route('srqtestdetail', ['id'=>$consent->user->id])}}" style="color: black"><u>{{$consent->user->name}}</u></a>
			</td>
			<td>
				{{$consent->user->company}}
			</td>
			<td>
				{{$consent->user->gender}}
			</td>
			<td>
				@if($consent->status == 'SRQ: Tidak lulus SRQ')
				<p style="color: crimson">{{$consent->status}}</p>
				@else
				<p style="color: #337ab7">{{$consent->status}}</p>
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