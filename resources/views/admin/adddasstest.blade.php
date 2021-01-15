@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Tambahkan pertanyaan Tes Dass</h1>
@stop

@section('content')
<div class="container-fluid">

	<form method="POST" action="/addtest">
		@csrf

		<div class="form-group row">
			<label for="question" class="col-md-2 col-form-label text-md-right">{{ __('Pertanyaan') }}</label>

			<div class="col-md-6">
				<input id="question" type="text" class="form-control" name="question" value="{{ old('question') }}">
			</div>
		</div>

		<input type="hidden" name="category_id" value="2">
		<input type="submit" value="Submit" name="submit">
	</form>

</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
