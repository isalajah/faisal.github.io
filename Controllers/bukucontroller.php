<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buku;

class bukucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = buku::orderBy('created_at', 'DESC')->paginate(10);
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
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
            'judul_buku'  => 'required',
            'jenis_buku'  => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit'  => 'required',
            'jumlah_buku'=>'required'
          ]);
    
            buku::create([
            'judul_buku'  => $request->judul_buku,
            'jenis_buku'  => $request->jenis_buku,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'jumlah_buku'=> $request->jumlah_buku
           
        ]); 
            return redirect(route('buku.index'))->with(['success'=>'buku berhasil ditambahkan']);
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
        $buku = buku::find($id);
        return view('buku.edit', compact('buku'));
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
            'judul_buku'  => 'required',
            'jenis_buku'  => 'required',
            'pengarang' => 'required|',
            'penerbit' => 'required|',
            'tahun_terbit'  => 'required',
            'jumlah_buku'=>'required'
          ]);
            $buku = buku::find($id);
            $buku->update([
            'judul_buku'  => $request->judul_buku,
            'jenis_buku'  => $request->jenis_buku,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'jumlah_buku'=> $request->jumlah_buku
           
        ]); 
            return redirect(route('buku.index'))->with(['success'=>'buku berhasil ditambahkan']);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        buku::where('id', $id)->delete();
        return redirect(route('buku.index'))->with(['success'=>'buku berhasil dihapus!']);
    }
    
}
