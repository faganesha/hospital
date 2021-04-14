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
			<td style="width: 50px;">Nama</td>
			<td style="width: 10px;">:</td>
			<td>{{$result->user->name}}</td>
		</tr>
		<tr>
			<td style="width: 50px; ">Gender</td>
			<td style="width: 10px;">:</td>
			<td>{{$result->user->gender}}</td>
		</tr>
		<tr>
			<td style="width: 50px; ">Perusahaan</td>
			<td style="width: 10px;">:</td>
			<td>{{$result->user->company}}</td>
		</tr>
		<tr>
			<td style="width: 50px; ">Alamat</td>
			<td style="width: 10px;">:</td>
			<td>{{$result->user->address}}</td>
		</tr>
	</table>
	@endif
	@endforeach

	<br>

	<table class="table table-bordered table-hover mydatatable" id="example">
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
                <th>
                    Kesimpulan
                </th>
			</tr>
		</thead>

		@foreach ($results as $index => $result)
		<tr>
			<td>
				{{$index+1}}
			</td>
			<td>
				{{$result->result->question}}
			</td>
			<td>
				@if($result->answer == 1)
				Yes
				@else
				No
				@endif
			</td>
            <td>
                @if($result->answer==1)
                    <div class="text-danger">
                        {{$result->result->indication}}
                    </div>
                @else
                    <div class="text-primary">
                        Tidak Terindikasi Apapun
                    </div>
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
