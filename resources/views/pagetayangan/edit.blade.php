
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

<form method="post" action="/datatayangan/{{$datatayangan->kode_tayangan}}">
   @method('PATCH')
    @csrf
   <!-- name adalah hal yang penting, sesuaikan dengan database -->
   <div class="card-body">
   <div class="row">
   <div class="col-md-4 offset-md-4">
        
        <div class="form-group">
            <label for="nama_tayangan">Nama Tayangan</label>
            <input type="text" class="form-control" id="nama_tayangan" name="nama_tayangan" value="{{ $datatayangan->nama_tayangan }}">
        </div>

        <div class="form-group">
            <label for="kode_jadwal">Pilih Jadwal</label>
            <select name="kode_jadwal" class="form-control" id="kode_jadwal">
                <option value="{{$datatayangan->kode_jadwal}}">Hari: {{$datatayangan->datajadwal->hari}} Jam: {{$datatayangan->datajadwal->jam}}</option>
                @foreach($datajadwal as $datajadwal)
                    <option value="{{ $datajadwal->kode_jadwal }}">Hari: {{ $datajadwal->hari }} <br> Jam: {{ $datajadwal->jam }} </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="id_talent">Pilih Talent</label>
            <select name="id_talent" class="form-control" id="id_talent">
                <option value="{{$datatayangan->id_talent}}">{{$datatayangan->datatalent->nama_talent}}</option>
                @foreach($datatalent as $datatalent)
                    <option value="{{ $datatalent->id_talent }}">{{ $datatalent->nama_talent }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="kode_lembaga">Pilih Lembaga</label>
            <select name="kode_lembaga" class="form-control" id="kode_lembaga">
                <option value="{{$datatayangan->kode_lembaga}}">{{$datatayangan->datalembaga->nama_lembaga}}</option>
                @foreach($datalembaga as $datalembaga)
                    <option value="{{ $datalembaga->kode_lembaga }}">{{ $datalembaga->nama_lembaga }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="rating">Rating Tayangan</label>
            <input type="text" class="form-control" id="rating" name="rating" value="{{ $datatayangan->rating }}">
        </div>
        
    <button type="submit" class="btn btn-primary mb-10">Submit</button>
    </div>
    </div>
    </div>
</form>



    </tbody>
    </table>
<!-- </div> -->
@endsection     