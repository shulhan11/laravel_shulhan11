<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Rumahsakit;
use Illuminate\Http\Request;
use Mockery\Generator\StringManipulation\Pass\Pass;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pasien.index', [
            'pasien' => Pasien::all(),
            'title' => 'pasien'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.tambah', [
            'rumahsakit' => Rumahsakit::all(),
            'title' => 'pasien'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validationData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required|numeric',
            'rumahsakit_id' => 'numeric',
        ]);
        Pasien::create($validationData);
        return redirect('/pasien')->with('succes', 'Post is Created');
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
    public function edit(Pasien $pasien)
    {
        return view('pasien.edit', [
            'pasien' => $pasien,
            'rumahsakit' => Rumahsakit::all(),
            'title' => 'pasien'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasien $pasien)
    {
        $validationData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required|numeric',
            'rumahsakit_id' => 'numeric',
        ]);
        Pasien::where('id', $pasien->id)->update($validationData);
        return redirect('/pasien')->with('succes', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pasien::find($id)->delete($id);

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
