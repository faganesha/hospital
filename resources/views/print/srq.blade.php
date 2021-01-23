
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="G2Wzdv9v63Hz05v9oYQjFvx442UbU4ZeUn0ID0d2">

	<title>Dashboard</title>

	<style>
		th, td {
			border: 1px solid black;
			text-align: left;
			padding: 10px;
		}

		table{
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}
	</style>
	
</head>

<body>
	<center>
		<div><br><br>
			<h1>Daftar Hasil Tes SRQ</h1>
		</div>
	</div>

	<table>
		<thead>
			<tr>
				<th  > 
					No
				</th>
				<th>
					NIK Pasien
				</th>
				<th>
					Nama	
				</th>
				<th>
					No Hp
				</th>
				<th>
					Perusahaan
				</th>
				<th>
					Jenis Kelamin
				</th>
				<th>
					Status Tes
				</th>
			</tr>
		</thead>

		@foreach ($srqtests as $index => $consent)

		<tr>
			<td>
				{{$index+1}}.
			</td>
			<td>
				{{$consent->user->nik}}
			</td>
			<td>
				{{$consent->user->name}}
			</td>
			<td>
				{{$consent->user->phone}}
			</td>
			<td>
				{{$consent->user->company}}
			</td>
			<td>
				{{$consent->user->gender}}
			</td>
			<td>
				@if($consent->status == 'Tidak lulus SRQ')
				<p style="color: crimson" >{{$consent->status}}</p>
				@else
				<p style="color: #337ab7" >{{$consent->status}}</p>
				@endif
			</td>
		</tr>
		@endforeach

	</table>
</center>

</body>
</html>
