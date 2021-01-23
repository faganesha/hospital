@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Detail Tes Dass</h1>
@stop

@section('content')
<div class="container-fluid">
	
	<form action="{{route('dassupdate', )}}" method="post">
		@csrf
		<table class="table table-bordered">
					@foreach($dasstests as $dass)
			<tr>
				<td colspan="2">
					Total Skor Variable Depresi
				</td>
				<td>
					<input type="text" name="dass_depression" style="width: 100%">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					Total Skor Variable Kecemasan
				</td>
				<td>
					<input type="text" name="dass_anxiety" style="width: 100%">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					Total Skor Variable Stress 
				</td>
				<td>
					<input type="text" name="dass_stress" style="width: 100%">
				</td>
			</tr>
		</table>

		<input type="submit" class="btn btn-primary" value="Submit" name="submit">
		<input type="hidden" name="id" value={{$dass->id}}>
	</div>
	@endforeach
</form>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
