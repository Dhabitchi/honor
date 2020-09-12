<?php

namespace App\Http\Controllers;

use App\Hr;
use App\Jenishr;
use App\Staff;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hr = Hr::sortable()->paginate(10);
//        $hr = Hr::paginate(10);
        $param = [];
        $filter = '';
        $param[] = null;

//        return view('hr.index', compact('hr'));
        return response()->view('hr.index',['hr'=>$hr,'filter'=>$filter]);
    }

    public function cetak_pdf(Request $request){

        $filter = $request->filter;

            if($filter == true){
                $hr = Hr::all()->where('nama','=',$filter);
            }
            else{
                $hr = hr::all();
            }

//        $hr = Hr::all()->where('nama','=','');

        $pdf = PDF::loadview('hr.hr_pdf',['Hr'=>$hr]);
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $jnshr = Jenishr::all();
        $stf = Staff::all();

        return view('hr.create', compact('jnshr','stf'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'jenishr' => 'required',
            'tgl' => 'required',
            'nominal' => 'required',
            'keterangan' => 'required'
        ]);
        $show=Hr::create($validateData);

        return redirect()->route('hr.index');
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
        $hr=Hr::findOrFail($id);
        $jnshr = Jenishr::all();
        $stf = Staff::all();

        return view('hr.edit',compact('hr','jnshr','stf'));
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
        $validateData=$request->validate([
            'nama' => 'required',
            'jenishr' => 'required',
            'tgl' => 'required',
            'nominal' => 'required',
            'keterangan' => 'required'
        ]);
        Hr::whereid($id)->update($validateData);

        return redirect()->route('hr.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $hr=Hr::findOrFail($id);
        $hr->delete();

        return redirect()->route('hr.index');
    }
    public function cari(Request $request){
        $filter = $request->cari;

        $hr = Hr::Where('nama','like',"%".$filter."%")->paginate(10);

        return view('hr.index',compact('hr','filter'));
    }
}
