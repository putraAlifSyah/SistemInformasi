<?php

namespace App\Http\Controllers;

use App\Models\datalembaga;
use Illuminate\Http\Request;
use PDF;

class DataLembagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalembaga=datalembaga::all();
        return view ('pagelembaga/datalembaga', ['datalembaga'=>$datalembaga]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pagelembaga/tambahdata');
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
            // 'kode_lembaga' => 'required|max:25',
            'nama_lembaga' => 'required',
            'nama_direktur' => 'required',
            'alamat' => 'required',
            'telpon' => 'required',
        ]);

        datalembaga::create($request->all());
        return redirect('/datalembaga')->with ('status', 'Data telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\datalembaga  $datalembaga
     * @return \Illuminate\Http\Response
     */
    public function show(datalembaga $datalembaga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\datalembaga  $datalembaga
     * @return \Illuminate\Http\Response
     */
    public function edit(datalembaga $datalembaga)
    {
        return view ('pagelembaga/edit', ['datalembaga'=>$datalembaga]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\datalembaga  $datalembaga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, datalembaga $datalembaga)
    {
        datalembaga::where('kode_lembaga', $datalembaga->kode_lembaga)
                    ->update([
                        // 'kode_lembaga'=>$request->kode_lembaga,
                        'nama_lembaga'=>$request->nama_lembaga,
                        'nama_direktur'=>$request->nama_direktur,
                        'alamat'=>$request->alamat,
                        'telpon'=>$request->telpon
                    ]);
        return redirect('/datalembaga')->with('status', 'Data telah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\datalembaga  $datalembaga
     * @return \Illuminate\Http\Response
     */
    public function destroy(datalembaga $datalembaga)
    {
        datalembaga::destroy($datalembaga->kode_lembaga);
        
        return redirect('/datalembaga')->with('status', 'Data telah berhasil dihapus');
    }
    public function cetak_pdf()
    {
    	$lembaga = datalembaga::all();
    	$pdf = PDF::loadview('pagelembaga/datalembaga_cetak',['lembaga'=>$lembaga]);
    	return $pdf->download('laporan-lembaga-pdf');
    }
}
