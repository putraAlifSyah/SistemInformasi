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
		<h5>Laporan Data Tayangan</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
                    <th>Kode Tayangan</th>
                    <th>Nama Tayangan</th>
                    <th>Jadwal</th>
                    <th>Nama Talent</th>
                    <th>Nama Lembaga</th>
                    <th>Rating</th>
			</tr>
		</thead>
		<tbody>
            @foreach($tayangan as $data)
                <tr class="text=center">
					<td>{{$data->kode_tayangan}}</td>
					<td>{{$data->nama_tayangan}}</td>
					<td>Hari: {{$data->datajadwal['hari']}}<br>
						Jam: {{$data->datajadwal['jam']}}
					</td>
					<td>{{$data->datatalent['nama_talent']}}</td>
					<td>{{$data->datalembaga['nama_lembaga']}}</td>
					<td>{{$data->rating}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>