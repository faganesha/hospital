@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Tambahkan pertanyaan Tes BDI</h1>
@stop

@section('content')
<div class="container-fluid">

	<form method="POST" action="/addtestbdi">
		@csrf

		<div class="form-group row">
			<label for="question" class="col-md-2 col-form-label text-md-right">{{ __('Pertanyaan') }}</label>

			<div class="col-md-6">
				<input id="question" type="text" class="form-control" name="question" value="{{ old('question') }}">
			</div>
		</div>

		<div class="form-group row">
			<label for="" class="col-md-2 col-form-label text-md-right">{{ __('Jawaban') }}</label>
		</div>


		<div class="form-group row">
			<label for="a" class="col-md-2 col-form-label text-md-right">{{ __('0') }}</label>

			<div class="col-md-6">
				<input id="a" type="text" class="form-control" name="a" value="{{ old('a') }}">
			</div>
		</div>


		<div class="form-group row">
			<label for="b" class="col-md-2 col-form-label text-md-right">{{ __('1') }}</label>

			<div class="col-md-6">
				<input id="b" type="text" class="form-control" name="b" value="{{ old('b') }}">
			</div>
		</div>


		<div class="form-group row">
			<label for="c" class="col-md-2 col-form-label text-md-right">{{ __('2') }}</label>

			<div class="col-md-6">
				<input id="c" type="text" class="form-control" name="c" value="{{ old('c') }}">
			</div>
		</div>


		<div class="form-group row">
			<label for="d" class="col-md-2 col-form-label text-md-right">{{ __('3') }}</label>

			<div class="col-md-6">
				<input id="d" type="text" class="form-control" name="d" value="{{ old('d') }}">
			</div>
		</div>

		<input type="hidden" name="category_id" value="3">
		<input type="submit" class="btn btn-primary" value="Submit" name="submit">
	</form>

</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
