<?php

namespace App\Http\Controllers;

use App\Komoditas;
use Illuminate\Http\Request;

class KomoditasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='Komoditas';
        $komoditas=Komoditas::paginate(10);
        return view('admin.komoditas',compact('title','komoditas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Input Komoditas';
        return view('admin.inputkomoditas',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required'=> 'Kolom :attribute harus lengkap',
            'date'    => 'Kolom :attribute Harus Tanggal.',
            'numeric' => 'Kolom :attribute Harus Angka.',
        ];
        $validasi = $request->validate([
            'nama_komoditas'=>'required',
            'keterangan'=>'required',
            'status'=>'required'
        ],$messages);
        //dd($validasi);
        Komoditas::create($validasi);
        return redirect('komoditas')->with('success', 'Data berhasil di update');
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
        $title='Input Komoditas';
        $komoditas=Komoditas::find($id);
        return view('admin.inputkomoditas',compact('title','komoditas'));
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
        $messages = [
            'required'=> 'Kolom :attribute harus lengkap',
            'date'    => 'Kolom :attribute Harus Tanggal.',
            'numeric' => 'Kolom :attribute Harus Angka.',
        ];
        $validasi = $request->validate([
            'nama_komoditas'=>'required',
            'keterangan'=>'required',
            'status'=>'required'
        ],$messages);
        //dd($validasi);
        Komoditas::whereid_komoditas($id)->update($validasi);
        return redirect('komoditas')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Komoditas::whereid_komoditas($id)->delete();
        return redirect('komoditas')->with('success', 'Data berhasil di update');
    }
}
