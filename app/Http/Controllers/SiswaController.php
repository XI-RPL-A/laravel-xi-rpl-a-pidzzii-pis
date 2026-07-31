<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illiminate\Http\Response
     */
    public function index()
    {
        //Menampilkan Data siswa dengan pagination
        $siswa = Siswa::all();
        $paginate = Siswa::orderBy('id_siswa', 'asc')->paginate(3);
        return view('siswa.index', ['siswa' => $siswa, 'paginate' => $paginate]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illiminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param \App\Models\Siswa $siswa
     * @return \Illiminate\Http\Response
     * 
     */
    public function store(Request $request)
    {
        //Validasi input
        $request->validate([
            'nis' => "required",
            'nama' => "required",
            'kelas' => "required",
            'jurusan' => "required",
        ]);

        //simpan data ke tabel siswa
        Siswa::create($request->all());

        return redirect()->route('siswa.index')
            ->with('success', 'Data siswa Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        return view('siswa.detail', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\Siswa $siswa
     * @return \Illiminate\Http\Response
     * 
     */
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \App\Models\Siswa $siswa
     * @return \Illiminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //Validasi input
        $request->validate([
            'nis' => "required",
            'nama' => "required",
            'kelas' => "required",
            'jurusan' => "required",
        ]);

        //simpan data ke tabel siswa
        $siswa->update($request->all());

        return redirect()->route('siswa.index')
            ->with('success', 'Data siswa Berhasil diupdate!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Siswa $siswa
     * @return \Illiminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //Validasi input
        $siswa->delete();
        
        return redirect()->route('siswa.index')
            ->with('success', 'Data siswa Berhasil dihapus!');
    }
}
