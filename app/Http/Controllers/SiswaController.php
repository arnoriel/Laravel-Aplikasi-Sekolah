<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa=siswa::all();
        return view ('siswa.index', compact ('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswa=Siswa::all();
        return view ('siswa.create', compact ('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
        ]);

        $siswa = new siswa;
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->tgl_lahir= $request->tgl_lahir;
        $siswa->jk= $request->jk;
        
        $siswa->save();
        return redirect('/siswa');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $siswa = siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->tgl_lahir= $request->tgl_lahir;
        $siswa->jk= $request->jk;
        
        $siswa->save();
        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}
