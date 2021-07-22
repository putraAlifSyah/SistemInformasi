
@extends('../layout/main')

@section('title','Home')

@section('juduldalam')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Ubah Data</h1>
            </div>
        </div>
        </div>
         <div class="col-sm-8">
             <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                       <!-- <li><i>Tambah Data</i></li> -->
                    </ol>
                </div>
            </div>
        </div>
</div>
@endsection

@section('konten')
<!-- <div class="container"> -->
<form method="post" action="/datalembaga/{{$datalembaga->kode_lembaga}}">
   @method('PATCH')
    @csrf
   <!-- name adalah hal yang penting, sesuaikan dengan database -->
   <div class="card-body">
   <div class="row">
   <div class="col-md-4 offset-md-4">
        <!-- <div class="form-group">
            <label for="kode" class="col-xs-2 col-form-label">Kode Lembaga</label>
            <input type="text" class="form-control" id="kode" name="kode_lembaga" value="{{ $datalembaga->kode_lembaga }}">
        </div> -->

        <div class="form-group">
            <label for="nama_lembaga">Nama Lembaga</label>
            <input type="text" class="form-control" id="nama_lembaga" name="nama_lembaga" value="{{ $datalembaga->nama_lembaga }}">
        </div>

        <div class="form-group">
            <label for="nama_direktur">Nama Direktur</label>
            <input type="text" class="form-control" id="nama_direktur" name="nama_direktur" value="{{ $datalembaga->nama_direktur }}">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $datalembaga->alamat }}">
        </div>

        <div class="form-group">
            <label for="telpon">Telpon</label>
            <input type="text" class="form-control" id="telpon" name="telpon" value="{{ $datalembaga->telpon }}">
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
    </div>
</form>
    </tbody>
    </table>
<!-- </div> -->
@endsection     