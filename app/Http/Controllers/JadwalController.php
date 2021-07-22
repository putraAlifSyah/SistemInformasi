<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\datakaryawan;
use App\Models\datatalent;
use Illuminate\Http\Request;
use PDF;
class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal=jadwal::all();
        return view ('/pagejadwal/jadwal', ['jadwal'=>$jadwal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datakaryawan=datakaryawan::all();
        $datatalent=datatalent::all();
        return view('pagejadwal/tambahdata', [
                    'datakaryawan'=>$datakaryawan,
                    'datatalent'=>$datatalent
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
        $this->validate($request,[
            'hari' => 'required',
            'jam' => 'required',
            'nama_karyawan' => 'required',
            'nama_talent' => 'required'
         ]);

        jadwal::create($request->all());
        return redirect('/jadwal')->with ('status', 'Data telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(jadwal $jadwal)
    {   
        $datakaryawan=datakaryawan::all();
        $datatalent=datatalent::all();
        // return $jadwal->datakaryawan['nama_karyawan'];
        return view ('pagejadwal/edit', 
                        ['jadwal'=>$jadwal, 
                        'datakaryawan'=>$datakaryawan, 
                        'datatalent'=>$datatalent]
                    );
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jadwal $jadwal)
    {
        $this->validate($request,[
            'hari' => 'required',
            'jam' => 'required',
            'nama_karyawan' => 'required',
            'nama_talent' => 'required'
         ]);

        jadwal::where('kode_jadwal', $jadwal->kode_jadwal)
        ->update([
            'hari'=>$request->hari,
            'jam'=>$request->jam,
            'nama_karyawan'=>$request->nama_karyawan,
            'nama_talent'=>$request->nama_talent,
        ]);
        return redirect('/jadwal')->with('status', 'Data telah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(jadwal $jadwal)
    {
        jadwal::destroy($jadwal->kode_jadwal);
        return redirect('/jadwal')->with('status', 'Data telah berhasil dihapus');
    }
    
    public function cetak_pdf()
    {
    	$jadwal = jadwal::all();
    	$pdf = PDF::loadview('pagejadwal/datajadwal_cetak',['jadwal'=>$jadwal]);
    	return $pdf->download('laporan-jadwal-pdf');
    }
}
