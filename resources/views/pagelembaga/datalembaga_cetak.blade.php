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
		<h5>Laporan Data Lembaga</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
                    <th>Kode Lembaga</th>
                    <th>Nama Lembaga</th>
                    <th>Nama Direktur</th>
                    <th>Alamat</th>
                    <th>Telpon</th>
			</tr>
		</thead>
		<tbody>
            @foreach($lembaga as $data)
                <tr class="text=center">
					<td>{{$data->kode_lembaga}}</td>
					<td>{{$data->nama_lembaga}}</td>
					<td>{{$data->nama_direktur}}</td>
					<td>{{$data->alamat}}</td>
					<td>{{$data->telpon}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>