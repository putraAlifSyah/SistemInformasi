@extends('../layout/main')

@section('title','Data Talent')

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
                         <i>data/talent</i>
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
        <strong>Data Talent</strong>
    </div>
    <div class="pull-right">
        <a href="/datatalent/tambah" class="btn-sm btn-success rounded mb-5">Tambah Data</a>
        <a href="/datatalent/cetak_pdf" class="btn-sm btn-success rounded mb-5">Cetak Data</a>
    </div>
    <table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nama Talent</th>
            <th>Nama Manager</th>
            <th>No Telp Manager</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody class="table table-hover">
    @foreach($data as $data)
        <tr class="text=center">
                <td>{{$data->id_talent}}</td>
                <td>{{$data->nama_talent}}</td>
                <td>{{$data->nama_manager}}</td>
                <td>{{$data->no_telpon_manager}}</td>
                <td>
                <div class="card-body">
                    <a href="datatalent/{{$data->id_talent}}/edit" class="btn-sm btn-primary rounded tombol">Ubah</a>
                    <form action="/datatalent/{{$data->id_talent}}" method="post" class="ini">
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
    @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
<!-- </div> -->

@endsection