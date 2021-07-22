<?php

namespace App\Http\Controllers;

use App\Models\datatalent;
use Illuminate\Http\Request;
use PDF;
class DataTalentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=datatalent::all();
        return view ('/pagetalent/datatalent', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pagetalent/tambahdata');
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
            'nama_talent' => 'required|max:255',
            'nama_manager' => 'required',
            'no_telpon_manager' => 'required'
        ]);

        datatalent::create($request->all());
        return redirect('/datatalent')->with ('status', 'Data telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\datatalent  $datatalent
     * @return \Illuminate\Http\Response
     */
    public function show(datatalent $datatalent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\datatalent  $datatalent
     * @return \Illuminate\Http\Response
     */
    public function edit(datatalent $datatalent)
    {
        return view ('pagetalent/edit', ['datatalent'=>$datatalent]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\datatalent  $datatalent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, datatalent $datatalent)
    {
        datatalent::where('id_talent', $datatalent->id_talent)
                    ->update([
                        'nama_talent'=>$request->nama_talent,
                        'nama_manager'=>$request->nama_manager,
                        'no_telpon_manager'=>$request->no_telpon_manager
                    ]);
        return redirect('/datatalent')->with('status', 'Data telah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\datatalent  $datatalent
     * @return \Illuminate\Http\Response
     */
    public function destroy(datatalent $datatalent)
    {
        datatalent::destroy($datatalent->id_talent);
        
        return redirect('/datatalent')->with('status', 'Data telah berhasil dihapus');
    }
    public function cetak_pdf()
    {
    	$talent = datatalent::all();
    	$pdf = PDF::loadview('pagetalent/datatalent_cetak',['talent'=>$talent]);
    	return $pdf->download('laporan-talent-pdf');
    }
}
