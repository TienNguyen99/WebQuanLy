<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanQuan;
use App\Models\ThanhPhan;
use Carbon\Carbon;
use PDF;


class DanQuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = DanQuan::all();
        $thanhphan = ThanhPhan::pluck('title','id');
        
        return view('admincp.tongdanquan.tongdanquan_them',compact('list','thanhphan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admincp.tongdanquan.tongdanquan_them');
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
        $danquan = new DanQuan();
        $danquan->tenkhaisinh = $data['tenkhaisinh'];
        $danquan->tenkhac = $data['tenkhac'];
        $danquan->sdt = $data['sdt'];
        $danquan->gioitinh = $data['gioitinh'];
        
        $danquan->namsinh  = Carbon::parse($data['namsinh'])->format('y/d/m');
        
        $danquan->thanhphan_id = $data['thanhphan_id'];
        $danquan->cancuoc = $data['cancuoc'];
        $danquan->noidkks = $data['noidkks'];
        $danquan->quequan = $data['quequan'];
        $danquan->dantoc = $data['dantoc'];
        $danquan->tongiao = $data['tongiao'];
        $danquan->thuongtru = $data['thuongtru'];
        $danquan->save();
        if ($data) {
        alert()->success('Tạo hồ sơ thành công'); // hoặc có thể dùng alert('Post Created','Successfully', 'success');
    } else {
        alert()->error('Lỗi', 'Vui lòng điền đúng thông tin.'); // hoặc có thể dùng alert('Post Created','Something went wrong!', 'error');
    }

        
        
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
    public function edit($pdfid)
    {
        
        $pdf = DanQuan::where('id',$pdfid)->first();
        // print_r($pdf);

        return view('admincp.myPDF',compact('pdf'));
        // return redirect()->back();
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
        $data = $request->all();
        $danquan =  DanQuan::find($id);
        $danquan->tenkhaisinh = $data['tenkhaisinh'];
        $danquan->tenkhac = $data['tenkhac'];
        $danquan->sdt = $data['sdt'];
        $danquan->gioitinh = $data['gioitinh'];
        
        $danquan->namsinh  = Carbon::parse($data['namsinh'])->format('y/d/m');
        
        $danquan->thanhphan_id = $data['thanhphan_id'];
        $danquan->cancuoc = $data['cancuoc'];
        $danquan->noidkks = $data['noidkks'];
        $danquan->quequan = $data['quequan'];
        $danquan->dantoc = $data['dantoc'];
        $danquan->tongiao = $data['tongiao'];
        $danquan->thuongtru = $data['thuongtru'];
        $danquan->save();
        

        
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DanQuan::find($id)->delete();
        alert()->success('Xóa thành công');
        return redirect()->back();
    }
   
}
