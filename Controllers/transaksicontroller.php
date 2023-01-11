<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buku;
use App\transaksi;

class transaksicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $transaksi = transaksi::orderBy('created_at', 'DESC')->get();
        return view('transaksi.index', compact('transaksi'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $buku = buku::all();
        return view('transaksi.create', compact('buku'));
    
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
            'kode_transaksi'  => 'required',
            'tgl_pinjam'  => 'required',
            'tgl_kembali' => 'required|',
            'status' => 'required|',
            'buku_id'  => 'required'
          ]);
    
            transaksi::create([
            'kode_transaksi'  => $request->kode_transaksi,
            'tgl_pinjam'  => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
            'status' => $request->status,
            'buku_id'  => $request->buku_id
        ]); 
            return redirect(route('transaksi.index'))->with(['success'=>'transaksi berhasil ditambahkan']);
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
        
        $buku = buku::all();
        $transaksi = transaksi::where('id', $id)->first();
        return view('transaksi.edit', compact('transaksi', 'buku'));
    
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
        $this->validate($request,[
            'kode_transaksi'  => 'required',
            'tgl_pinjam'  => 'required',
            'tgl_kembali' => 'required',
            'status' => 'required',
            'buku_id'  => 'required'
          ]);

            $transaksi = transaksi::find($id);
            $transaksi->update([
            'kode_transaksi'  => $request->kode_transaksi,
            'tgl_pinjam'  => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
            'status' => $request->status,
            'buku_id'  => $request->buku_id
        ]); 
            return redirect(route('transaksi.index'))->with(['success'=>'transaksi berhasil ditambahkan']);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        transaksi::where('id', $id)->delete();
        return redirect(route('transaksi.index'))->with(['success'=>'transaksi berhasil dihapus!']);
    
    }
}
