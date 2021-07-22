@extends('../layout/main')

@section('title','jadwal')

@section('juduldalam')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1 style="font-size:18px;">jadwal</h1>
            </div>
            </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                         <i>jadwal/acara</i>
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
        <strong>Jadwal Acara</strong>
    </div>
    <div class="pull-right">
        <a href="/jadwal/tambah" class="btn-sm btn-success rounded mb-5">Tambah Data</a>
        <a href="/jadwal/cetak_pdf" class="btn-sm btn-success rounded mb-5">Cetak Data</a>
    </div>
    <table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Kode Jadwal</th>
            <th>Hari</th>
            <th>Jam</th>
            <th>Nama Karyawan</th>
            <th>Nama Talent</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody class="table table-hover">
    @foreach($jadwal as $jadwal)
        <tr class="text=center">
                <td>{{$jadwal->kode_jadwal}}</td>
                <td>{{$jadwal->hari}}</td>
                <td>{{$jadwal->jam}}</td>
                <td>{{$jadwal->datakaryawan['nama_karyawan']}}</td>
                <td>{{$jadwal->datatalent['nama_talent']}}</td>
                <td>
                <div class="card-body">
                    <a href="jadwal/{{$jadwal->kode_jadwal}}/edit" class="btn-sm btn-primary rounded tombol">Ubah</a>
                    <form action="/jadwal/{{$jadwal->kode_jadwal}}" method="post" class="ini">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn-xs btn-danger rounded" onclick="return confirm('Are you sure?')" style="font-size:13.5px">Hapus</buton>          
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
<!-- </div> -->
@if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
@endsection