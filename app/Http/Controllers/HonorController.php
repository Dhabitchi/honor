<?php

namespace App\Http\Controllers;

use App\Honor;
use Illuminate\Http\Request;

class HonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $hnr = Honor::all();
        return view('honor.index',compact('hnr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Honor  $honor
     * @return \Illuminate\Http\Response
     */
    public function show(Honor $honor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Honor  $honor
     * @return \Illuminate\Http\Response
     */
    public function edit(Honor $honor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Honor  $honor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Honor $honor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Honor  $honor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Honor $honor)
    {
        //
    }
}
