@extends('../layout/main')

@section('title','Data Lembaga')

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
                         <i>data/lembaga</i>
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
        <strong>Data Lembaga</strong>
    </div>
    <div class="pull-right">
        <a href="/datalembaga/tambah" class="btn-sm btn-success rounded mb-5">Tambah Data</a>
        <a href="/datalembaga/cetak_pdf" class="btn-sm btn-success rounded mb-5">Cetak Data</a>
    </div>
    <table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Kode Lembaga</th>
            <th>Nama Lembaga</th>
            <th>Nama Direktur</th>
            <th>Alamat</th>
            <th>Telpon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody class="table table-hover ">
    @foreach($datalembaga as $data)
        <tr class="text=center">
                <td>{{$data->kode_lembaga}}</td>
                <td>{{$data->nama_lembaga}}</td>
                <td>{{$data->nama_direktur}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->telpon}}</td>
                <td>
                <div class="card-body">
                    <a href="datalembaga/{{$data->kode_lembaga}}/edit" class="btn-sm btn-primary rounded tombol">Ubah</a>
                    <form action="/datalembaga/{{$data->kode_lembaga}}" method="post" class="ini">
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