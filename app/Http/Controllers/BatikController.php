<?php

namespace App\Http\Controllers;

use App\Models\Batik;
use Illuminate\Http\Request;

class BatikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batik = Batik::all();
        return view('index', compact('batik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batik = Batik::all();
        return view('input', ['batik' => $batik]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'warna' => 'required',
            'motif' => 'required',
            'deskripsi' => 'required',
            'asaldaerah' => 'required',
            'gambar' => 'required',
            'status' => 'required',
        ]);


        if ($request->file('gambar')) {
            $image_name = $request->file('gambar')->store('img_batik', 'public');
        }
        Batik::create([
            'nama' => $request->nama,
            'warna' => $request->warna,
            'motif' => $request->motif,
            'deskripsi' => $request->deskripsi,
            'asaldaerah' => $request->asaldaerah,
            'gambar' => $image_name,
            'status' => $request->status,
        ]);

        return redirect()->route('batik.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Batik  $batik
     * @return \Illuminate\Http\Response
     */
    public function show(Batik $batik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Batik  $batik
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $batik = Batik::find($id);
        return view('edit', compact('batik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Batik  $batik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $batik = Batik::find($id);
        $batik->nama = $request->nama;
        $batik->warna = $request->warna;
        $batik->motif = $request->motif;
        $batik->deskripsi = $request->deskripsi;
        $batik->asaldaerah = $request->asaldaerah;

        if ($batik->gambar && file_exists(storage_path('app/public/' . $batik->gambar))) {
            \Storage::delete('public/' . $batik->gambar);
        }
        $batik->status = $request->status;
        $batik->save();

        return redirect()->route('batik.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Batik  $batik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $batik = Batik::find($id)->delete();
    }
}
