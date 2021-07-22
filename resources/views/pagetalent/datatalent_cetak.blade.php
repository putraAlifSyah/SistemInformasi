<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Data Talent</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
                    <th>ID Talent</th>
                    <th>Nama Talent</th>
                    <th>Nama Manager</th>
                    <th>No Telp Manager</th>
			</tr>
		</thead>
		<tbody>
            @foreach($talent as $data)
                <tr class="text=center">
					<td>{{$data->id_talent}}</td>
					<td>{{$data->nama_talent}}</td>
					<td>{{$data->nama_manager}}</td>
					<td>{{$data->no_telpon_manager}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>