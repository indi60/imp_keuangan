<?php

namespace App\Http\Controllers;

use App\ModelTransaksi;
use App\ModelKontak;
use App\ModelSub;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Transaksi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = ModelTransaksi::all();
        return view('transaksi',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $kategori = ModelKontak::all();

         $sub = ModelSub::all();  

         return view('transaksi_create',compact('sub','kategori'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate(request(), [
            'tanggal' => 'required',
            'keterangan' => 'required',
        ]);
        $data = new ModelTransaksi();
        $data->tanggal = $request->tanggal;
        $data->keterangan = $request->keterangan;
        $data->kategori_id = $request->kategori_id;
        $data->subkategori_id = $request->subkategori_id;
        $data->jenis_transaksi = $request->trans;
        $data->jumlah = $request->jumlah;

        $data->save();
        return redirect()->route('transaksi.index')->with('alert-success','Berhasil Menambahkan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data = ModelTransaksi::where('id',$id)->get();

        $kategori = ModelKontak::all();

         $sub = ModelSub::all();  

         return view('transaksi_edit',compact('sub','kategori','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $data = ModelTransaksi::where('id',$id)->first();
         $data->tanggal = $request->tanggal;
         $data->keterangan = $request->keterangan;
         $data->kategori_id = $request->id;
         $data->subkategori_id = $request->namasub;
         $data->jenis_transaksi = $request->trans;
         $data->jumlah = $request->jumlah;
         $data->save();
         return redirect()->route('transaksi.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelTransaksi::where('id',$id)->first();
        $data->delete();
        return redirect()->route('transaksi.index')->with('alert-success','Data berhasi dihapus!');
    }
}
