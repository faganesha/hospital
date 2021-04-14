@extends('layouts.main')

@section('title')
Test
@endsection

@section('content')

<section>
	<div class="container" style="padding-bottom: 100px">
		<div class="row justify-content-center">
			<center>
				<br><br><br>
				<h6 class="h5weak">MINI</h6>
				<h3>Skrining Gangguan Mental</h3>
			</center>

			<div class="col-12 pl-8 ">
				<div class="card-body">
					<form method="POST" action="{{route('mini.insert')}}">
						{{csrf_field()}}
						<div style="height: 600px; overflow-y:scroll;">
							<table class="table table-bordered table-hover" id="example" >
								<thead class="thead-dark">
									<tr >
										<th rowspan="2" class="align-middle">No</th>
										<th rowspan="2" style="width: 70%" class="align-middle">
											Pertanyaan
										</th>
										<th colspan="2" style="width: 30%;">
											Jawaban
										</th>
									</tr>
									<tr>
										<th style="">Ya</th>
										<th style="">Tidak</th>
									</tr>
								</thead>

								<tbody>
									@foreach ($minis as $index => $mini)
									<tr>
										<td>
											{{$index+1}}
										</td>
										<td>
											{{$mini->question}}
										</td>
										<input type="hidden" name="testid[]" value="{{$mini->id}}">
										<td>
											<div class="form-group">
												<input  type="radio" name="answer[{{$mini->id}}]" id="yes" value="1">
												<label for="yes">Ya</label>
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="radio" name="answer[{{$mini->id}}]" id="no" value="0">
												<label  for="yes">Tidak</label>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>								
							</table>
						</div>
					</div>
					<div class="row text-center">
						<div class="col">
							<input type="submit" name="submitTest" value="Submit" style="color: white" class="butn butn-bg">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</section>
@endsection

@section ('css')
<link href="{{ asset ('css/creative.min.css') }}" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<script>
	$('.mydatatable').DataTable({
		"lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
		"ordering": false
	});
</script>
@endsection
