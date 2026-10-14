<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanan = Layanan::with('kiloan')->latest()->paginate(10);
        return 
        view('layanan.index', compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pesanan::create($request->validated());
    return 
    redirect()->route('pesanan.index')->with('success', 'Pesanan
ditambahkan.'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $layanan->load(['pesanan', 'layanan, id']);
        return 
        view('layanan.show',  compact('layanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pesanan->update($request->validated());
        return 
        redirect()->route('pesanan.index') ->with('success', 'Pesanan berhasil
diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pesanan->delete();
        return 
        redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil
dihapus.');

    }
}
