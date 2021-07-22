@extends('../layout/main')

@section('title','Data Tayangan')

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
                         <i>data/tayangan</i>
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
        <strong>Data Tayangan</strong>
    </div>
    <div class="pull-right">
        <a href="/datatayangan/tambah" class="btn-sm btn-success rounded mb-5">Tambah Data</a>
        <a href="/datatayangan/cetak_pdf" class="btn-sm btn-success rounded mb-5">Cetak Data</a>
    </div>
    <table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Kode Tayangan</th>
            <th>Nama Tayangan</th>
            <th>Jadwal</th>
            <th>Nama Talent</th>
            <th>Nama Lembaga</th>
            <th>Rating</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody class="table table-hover">
    @foreach($datatayangan as $data)
        <tr class="text=center">
                <td>{{$data->kode_tayangan}}</td>
                <td>{{$data->nama_tayangan}}</td>

                <td>Hari: {{$data->datajadwal['hari']}}<br>
                    Jam: {{$data->datajadwal['jam']}}
                </td>

                <td>{{$data->datatalent['nama_talent']}}</td>
                <td>{{$data->datalembaga['nama_lembaga']}}</td>
                <td>{{$data->rating}}</td>
                <td>
                <div class="card-body">
                    <a href="datatayangan/{{$data->kode_tayangan}}/edit" class="btn-sm btn-primary rounded tombol">Ubah</a>
                    <form action="/datatayangan/{{$data->kode_tayangan}}" method="post" class="ini">
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