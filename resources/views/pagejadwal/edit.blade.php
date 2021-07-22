
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
<!-- menampilkan error -->
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
        </ul>
    </div>
@endif

<form method="post" action="/jadwal/{{$jadwal->kode_jadwal}}">
   @method('PATCH')
    @csrf
   <!-- name adalah hal yang penting, sesuaikan dengan database -->
   <div class="card-body">
   <div class="row">
   <div class="col-md-4 offset-md-4">

        <div class="form-group">
            <label for="hari">Hari</label>
            <input type="text" class="form-control" id="hari" name="hari" value="{{ $jadwal->hari }}">
        </div>

        <div class="form-group">
            <label for="jam">Jam</label>
            <input type="text" class="form-control" id="jam" name="jam" value="{{ $jadwal->jam }}">
        </div>

        <div class="form-group">
            <label for="nama_karyawan">Pilih Karyawan</label>
            <select name="nama_karyawan" class="form-control" id="nama_karyawan">
                <option value="">-- pilih --</option>
                @foreach($datakaryawan as $jadwal)
                    <option value="{{ $jadwal->id_karyawan }}">{{ $jadwal->nama_karyawan }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="nama_talent">Pilih Talent</label>
            <select name="nama_talent" class="form-control" id="nama_talent">
                <option value="">-- pilih --</option>
                @foreach($datatalent as $jadwal)
                    <option value="{{ $jadwal->id_talent }}">{{ $jadwal->nama_talent }}</option>
                @endforeach
            </select>
        </div>
        <br>
    <button type="submit" class="btn btn-primary mb-10">Submit</button>
    </div>
    </div>
    </div>
</form>



    </tbody>
    </table>
<!-- </div> -->
@endsection     