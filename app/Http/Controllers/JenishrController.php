<?php

namespace App\Http\Controllers;

use App\Jenishr;
use Illuminate\Http\Request;

class JenishrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $jnshr = Jenishr::all();

        return view('jenishr.index',compact('jnshr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('jenishr.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
           'nama_jns' => 'required'
        ]);
        $show = Jenishr::create($validateData);

        return redirect()->route('jenishr.index');
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $jnshr = Jenishr::findOrFail($id);

        return view('jenishr.edit',compact('jnshr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nama_jns' => 'required'
        ]);
        Jenishr::whereid($id)->update($validateData);

        return redirect()->route('jenishr.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $jnshr = Jenishr::findOrFail($id);
        $jnshr->delete();

        return redirect()->route('jenishr.index')->with('success', 'Corona Case Data is successfully deleted');
    }
}
