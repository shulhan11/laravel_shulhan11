<?php

namespace App\Http\Controllers;

use App\Models\Rumahsakit;
use Illuminate\Http\Request;

class RumahsakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Rumahsakit $rumahsakit)
    {
        return view('rumah-sakit.index', [
            'rumahsakit' => $rumahsakit->get(),
            'title' => 'rumah-sakit'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rumah-sakit.tambah', [
            'title' => 'rumah-sakit'
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
            'rumahsakit' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'telepon' => 'required|numeric'
        ]);
        Rumahsakit::create($validationData);
        return redirect('/rumahsakit')->with('succes', 'Post is Created');
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
    public function edit(Rumahsakit $rumahsakit)
    {
        return view('rumah-sakit.edit', [
            'rumahsakit' => $rumahsakit,
            'title' => 'rumah-sakit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rumahsakit $rumahsakit)
    {
        $validationData = $request->validate([
            'rumahsakit' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'telepon' => 'required|numeric'
        ]);
        Rumahsakit::where('id', $rumahsakit->id)->update($validationData);
        return redirect('/rumahsakit')->with('succes', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rumahsakit::find($id)->delete($id);

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
