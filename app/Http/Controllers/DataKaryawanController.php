<?php

namespace App\Http\Controllers;

use App\Models\datakaryawan;
use App\Models\jadwal;
use App\Models\datalembaga;
use Illuminate\Http\Request;
use PDF;

class DataKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=datakaryawan::all();
        return view ('/pagekaryawan/datakaryawan', ['data'=>$data]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalembaga=datalembaga::all();
        return view('pagekaryawan/tambahdata', [
                    'datalembaga'=>$datalembaga
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_karyawan' => 'required|max:255',
            'jabatan' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required',
            'jam_kerja' => 'required',
            'gaji_pokok' => 'required',
        ]);

        datakaryawan::create($request->all());
        return redirect('/datakaryawan')->with ('status', 'Data telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\datakaryawan  $datakaryawan
     * @return \Illuminate\Http\Response
     */
    public function show(datakaryawan $datakaryawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\datakaryawan  $datakaryawan
     * @return \Illuminate\Http\Response
     */
    public function edit(datakaryawan $datakaryawan)
    {
        $datalembaga=datalembaga::all();
        return view('pagekaryawan/edit', [
                    'datakaryawan'=>$datakaryawan,
                    'datalembaga'=>$datalembaga
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\datakaryawan  $datakaryawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, datakaryawan $datakaryawan)
    {
        $this->validate($request, [
            'nama_karyawan' => 'required|max:255',
            'kode_lembaga' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required',
            'jam_kerja' => 'required',
            'gaji_pokok' => 'required',
        ]);
        
        datakaryawan::where('id_karyawan', $datakaryawan->id_karyawan)
                    ->update([
                        'nama_karyawan'=>$request->nama_karyawan,
                        'kode_lembaga'=>$request->kode_lembaga,
                        'jabatan'=>$request->jabatan,
                        'alamat'=>$request->alamat,
                        'no_telpon'=>$request->no_telpon,
                        'jam_kerja'=>$request->jam_kerja,
                        'gaji_pokok'=>$request->gaji_pokok
                    ]);
        return redirect('/datakaryawan')->with('status', 'Data telah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\datakaryawan  $datakaryawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(datakaryawan $datakaryawan)
    {
        datakaryawan::destroy($datakaryawan->id_karyawan);
        return redirect('/datakaryawan')->with('status', 'Data telah berhasil dihapus');
    }

    public function cetak_pdf()
    {
    	$karyawan = datakaryawan::all();
    	$pdf = PDF::loadview('pagekaryawan/datakaryawan_cetak',['karyawan'=>$karyawan]);
    	return $pdf->download('laporan-karyawan-pdf');
    }
}
