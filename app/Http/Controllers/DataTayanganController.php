<?php

namespace App\Http\Controllers;

use App\Models\datatayangan;
use App\Models\datatalent;
use App\Models\jadwal;
use App\Models\datalembaga;
use Illuminate\Http\Request;
use PDF;
class DataTayanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datatayangan=datatayangan::all();
        return view('pagetayangan/datatayangan', ['datatayangan'=>$datatayangan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datajadwal=jadwal::all();
        $datatalent=datatalent::all();
        $datalembaga=datalembaga::all();
        return view('pagetayangan/tambahdata', [
                    'datajadwal'=>$datajadwal,
                    'datatalent'=>$datatalent,
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
        $this->validate($request,[
            'nama_tayangan' => 'required',
            'kode_jadwal' => 'required',
            'id_talent' => 'required',
            'kode_lembaga' => 'required',
            'rating' => 'required'
         ]);

        datatayangan::create($request->all());
        return redirect('/datatayangan')->with ('status', 'Data telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\datatayangan  $datatayangan
     * @return \Illuminate\Http\Response
     */
    public function show(datatayangan $datatayangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\datatayangan  $datatayangan
     * @return \Illuminate\Http\Response
     */
    public function edit(datatayangan $datatayangan)
    {
        $datalembaga=datalembaga::all();
        $datajadwal=jadwal::all();
        $datatalent=datatalent::all();
        // return $jadwal->datajadwal['nama_karyawan'];
        return view ('pagetayangan/edit', 
                        ['datatayangan'=>$datatayangan, 
                        'datajadwal'=>$datajadwal, 
                        'datatalent'=>$datatalent,
                        'datalembaga'=>$datalembaga
                    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\datatayangan  $datatayangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, datatayangan $datatayangan)
    {
        $this->validate($request,[
            'nama_tayangan' => 'required',
            'kode_jadwal' => 'required',
            'id_talent' => 'required',
            'kode_lembaga' => 'required',
            'rating' => 'required'
         ]);

        datatayangan::where('kode_tayangan', $datatayangan->kode_tayangan)
        ->update([
            'nama_tayangan'=>$request->nama_tayangan,
            'kode_jadwal'=>$request->kode_jadwal,
            'id_talent'=>$request->id_talent,
            'kode_lembaga'=>$request->kode_lembaga,
            'rating'=>$request->rating,
        ]);
        return redirect('/datatayangan')->with('status', 'Data telah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\datatayangan  $datatayangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(datatayangan $datatayangan)
    {
        datatayangan::destroy($datatayangan->kode_tayangan);
        return redirect('/datatayangan')->with('status', 'Data telah berhasil dihapus');
    }
    public function cetak_pdf()
    {
    	$tayangan = datatayangan::all();
    	$pdf = PDF::loadview('pagetayangan/datatayangan_cetak',['tayangan'=>$tayangan]);
    	return $pdf->download('laporan-tayangan-pdf');
    }
}
