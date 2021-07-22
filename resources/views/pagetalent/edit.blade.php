
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
<form method="post" action="/datatalent/{{$datatalent->id_talent}}">
   @method('PATCH')
    @csrf
   <!-- name adalah hal yang penting, sesuaikan dengan database -->
   <div class="card-body">
    <div class="row">
        <div class="col-md-4 offset-md-4">
                <div class="form-group">
                    <label for="nama" class="col-xs-2 col-form-label">Nama Talent</label>
                    <input type="text" class="form-control" id="nama" name="nama_talent" value="{{ $datatalent->nama_talent }}">
                </div>

                <div class="form-group">
                    <label for="nama_manager">Nama Manager</label>
                    <input type="text" class="form-control" id="nama_manager" name="nama_manager" value="{{ $datatalent->nama_manager }}">
                </div>

                <div class="form-group">
                    <label for="no_telpon_manager">No Telpon Manager</label>
                    <input type="text" class="form-control" id="no_telpon_manager" name="no_telpon_manager" value="{{ $datatalent->no_telpon_manager }}">
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