<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThanhPhan;
class ThanhPhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list = ThanhPhan::all();

        return view('admincp.thanhphan.thanhphan_them',compact('list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $thanhphan = new ThanhPhan();
        $thanhphan->title = $data['title'];
        $thanhphan->description = $data['description'];
        $thanhphan->status = $data['status'];
        $thanhphan->save();
        return redirect()->back();
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
    public function edit($id)
    {
        $thanhphan = ThanhPhan::find($id);
        $list = ThanhPhan::all();

        return view('admincp.thanhphan.thanhphan_them',compact('list','thanhphan'));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ThanhPhan::find($id)->delete();
        return redirect()->back();
    }
}
