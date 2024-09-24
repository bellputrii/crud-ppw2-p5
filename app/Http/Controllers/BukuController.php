<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_buku = Buku::all()->sortByDesc('id');
        $total_buku = Buku::count();
        $total_harga = Buku::sum('harga');

        return view('index', compact('data_buku', 'total_buku', 'total_harga'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Buku::create($request->only(['judul', 'penulis', 'harga', 'tgl_terbit']));

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('edit', ['buku' => Buku::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Buku::find($id)->update($request->only(['judul', 'penulis', 'harga', 'tgl_terbit']));

        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Buku::find($id)->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus');
    }
}
