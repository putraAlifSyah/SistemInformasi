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
		<h5>Laporan Data Jadwal</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
                    <th>Kode Jadwal</th>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Nama Karyawan</th>
                    <th>Nama Talent</th>
			</tr>
		</thead>
		<tbody>
            @foreach($jadwal as $jadwal)
                <tr class="text=center">
					<td>{{$jadwal->kode_jadwal}}</td>
					<td>{{$jadwal->hari}}</td>
					<td>{{$jadwal->jam}}</td>
					<td>{{$jadwal->datakaryawan['nama_karyawan']}}</td>
					<td>{{$jadwal->datatalent['nama_talent']}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>