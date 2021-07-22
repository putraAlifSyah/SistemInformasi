@extends('../layout/main')

@section('title','Home')

@section('juduldalam')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tambah Data</h1>
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
<form method="post" action="/datakaryawan">
   @csrf
   <!-- name adalah hal yang penting, sesuaikan dengan database -->
   <div class="card-body">
   <div class="row">
   <div class="col-md-4 offset-md-4">
        <div class="form-group">
            <label for="nama" class="col-xs-2 col-form-label">Nama</label>
            <input type="text" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" class="form-control" id="nama" name="nama_karyawan" value="{{ old('nama') }}">
        </div>

        <div class="form-group">
            <label for="kode_lembaga">Pilih Lembaga</label>
            <select name="kode_lembaga" class="form-control" id="kode_lembaga">
                <option value="">-- pilih --</option>
                @foreach($datalembaga as $data)
                    <option value="{{ $data->kode_lembaga }}">{{ $data->nama_lembaga }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ old('jabatan') }}">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}">
        </div>

        <div class="form-group">
            <label for="no_telpon">No telpon</label>
            <input type="text" class="form-control" id="no_telpon" name="no_telpon" value="{{ old('no_telpon') }}">
        </div>

        <div class="form-group">
            <label for="jam_kerja">Jam Kerja</label>
            <input type="text" class="form-control" id="jam_kerja" name="jam_kerja" value="{{ old('jam_kerja') }}">
        </div>

        <div class="form-group">
            <label for="gaji_pokok">Gaji Pokok</label>
            <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok" value="{{ old('gaji_pokok') }}">
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