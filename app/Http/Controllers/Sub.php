<?php

namespace App\Http\Controllers;

use App\ModelSub;
use App\ModelKontak;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Sub extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelSub::all();
        return view('sub',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = ModelKontak::all(); 
        return view('sub_create',compact('kategori'));
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
            'kodesub' => 'required',
            'namasub' => 'required',
        ]);
        $data = new ModelSub();
        $data->kode_sub_kategori = $request->kodesub;
        $data->nama_sub_kategori = $request->namasub;
        $data->kategori_id = $request->kategori_id;
        $data->save();
        return redirect()->route('sub.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = ModelSub::where('id',$id)->get();

        return view('subedit',compact('data'));
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
                // dd($request);
        $data = ModelSub::where('id',$id)->first();
        $data->kode_sub_kategori = $request->kode_sub_kategori;
        $data->nama_sub_kategori = $request->nama_sub_kategori;
        $data->save();
        return redirect()->route('sub.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelSub::where('id',$id)->first();
        $data->delete();
        return redirect()->route('sub.index')->with('alert-success','Data berhasi dihapus!');
    }
}
