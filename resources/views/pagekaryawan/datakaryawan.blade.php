@extends('../layout/main')

@section('title','Data Karyawan')

@section('juduldalam')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1 style="font-size:18px;">Data</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <i>data/karyawan</i>
                </ol>
            </div>
        </div>
    </div>

</div>
@endsection

@section('konten')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="pull-left" style="margin-bottom:10px">
                <strong>Data Karyawan</strong>
            </div>
            <div class="pull-right">
                <a href="/datakaryawan/tambah" class="btn-sm btn-success rounded mb-5">Tambah Data</a>
                <a href="/datakaryawan/cetak_pdf" class="btn-sm btn-success rounded mb-5">Cetak Data</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Nama Lembaga</th>
                            <th>Jabatan</th>
                            <th>Alamat</th>
                            <th>No telpon</th>
                            <th>Jam Kerja</th>
                            <th>Gaji Pokok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table table-bordered table-striped table-hover">
                        @foreach($data as $data)
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
                                <div class="card-body">
                                    <a href="datakaryawan/{{$data->id_karyawan}}/edit"
                                        class="btn-sm btn-primary rounded tombol">Ubah</a>
                                    <form action="/datakaryawan/{{$data->id_karyawan}}" method="post" class="ini">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn-xs btn-danger rounded"
                                            onclick="return confirm('Are you sure?')" style="font-size:13.5px">Hapus
                                            </buton>
                                    </form>
                                    <div class="clear"></div>
                                </div>
                            </td>
                        </tr>
            </div>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<!-- </div> -->
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
@endsection