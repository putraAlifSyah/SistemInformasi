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
		<h5>Laporan Data Karyawan</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
            <th>ID</th>
                    <th>Nama</th>
                    <th>Nama Lembaga</th>
                    <th>Jabatan</th>
                    <th>Alamat</th>
                    <th>No telpon</th>
                    <th>Jam Kerja</th>
                    <th>Gaji Pokok</th>
			</tr>
		</thead>
		<tbody>
            @foreach($karyawan as $data)
                <tr class="text=center">
                    <td>{{$data->id_karyawan}}</td>
                    <td>{{$data->nama_karyawan}}</td>
                    <td>{{$data->datalembaga['nama_lembaga'] }}</td>
                    <td>{{$data->jabatan}}</td>
                    <td>{{$data->alamat}}</td>
                    <td>{{$data->no_telpon}}</td>
                    <td>{{$data->jam_kerja}}</td>
                    <td>{{$data->gaji_pokok}}</td>
                    <td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>