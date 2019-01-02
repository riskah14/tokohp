<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hp;

class HpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $hps = Hp::orderBy('id', 'DESC')->paginate(5);
        return view('hp.index', compact('hps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('hp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'produk' => 'required',
            'content' => 'required'
        ]);
         $hp = Hp::create($request->all());
         return redirect()->route('hp.index')->with('message', 'berhasil dibuat!');


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
         $hp = Hp::findOrFail($id);
        return view('hp.show', compact('hp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $hp = Hp::findOrFail($id);
        return view('hp.edit', compact('hp'));
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
        //
         $this->validate($request, [
            'produk' => 'required',
            'content' => 'required'
        ]);

        $hp = Hp::findOrFail($id)->update($request->all());

        return redirect()->route('hp.index')->with('message', 'berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $hp = Hp::findOrFail($id)->delete();
        return redirect()->route('hp.index')->with('message', 'berhasil dihapus!');
    }
}
