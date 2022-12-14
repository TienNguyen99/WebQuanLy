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
        $list = DanQuan::with('thanhphan')->get();
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

        // return view('admincp.tongdanquan.tongdanquan_them');
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
        // dd($data);
        $danquan = new DanQuan();
        $danquan->tenkhaisinh = $data['tenkhaisinh'];
        $danquan->tenkhac = $data['tenkhac'];
        $danquan->sdt = $data['sdt'];
        $danquan->gioitinh = $data['gioitinh'];
        
        // $danquan->namsinh  = Carbon::parse($data['namsinh'])->format('y-d-m');
        $danquan->namsinh = Carbon::createFromFormat('d/m/Y', $data['namsinh']);
        $danquan->congancapngay = Carbon::createFromFormat('d/m/Y', $data['congancapngay']);
        
        $danquan->thanhphan_id = $data['thanhphan_id'];
        $danquan->cancuoc = $data['cancuoc'];
        
        
        $danquan->noidkks = $data['noidkks'];
        $danquan->quequan = $data['quequan'];
        $danquan->dantoc = $data['dantoc'];
        $danquan->tongiao = $data['tongiao'];
        $danquan->thuongtru = $data['thuongtru'];
        $danquan->noio = $data['noio'];



        $danquan->tinhhinhgiadinh = $data['tinhhinhgiadinh'];
        $danquan->tinhhinhbanthan = $data['tinhhinhbanthan'];


        // th??m ???nh
        // 
        // 
        $get_image = $request->file('anh34');
        $path = 'public/backend/images/';
        if($get_image){

            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode(',',$get_name_image));
            $new_image = $name_image.rand(0,9999).'.'.$get_image->getClientOriginalName();
            $get_image->move($path,$new_image);
            $danquan->anh34 = $new_image;
        }
        $danquan->save();
        if ($data) {
        toast()->success('T???o h??? s?? th??nh c??ng'); // ho???c c?? th??? d??ng alert('Post Created','Successfully', 'success');
    } else {
        toast()->error('L???i', 'Vui l??ng ??i???n ????ng th??ng tin.'); // ho???c c?? th??? d??ng alert('Post Created','Something went wrong!', 'error');
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
        
        $danquan->namsinh = Carbon::createFromFormat('d/m/Y', $data['namsinh']);
        
        $danquan->thanhphan_id = $data['thanhphan_id'];
        $danquan->cancuoc = $data['cancuoc'];
        $danquan->congancapngay = Carbon::createFromFormat('d/m/Y', $data['congancapngay']);
        $danquan->noidkks = $data['noidkks'];
        $danquan->quequan = $data['quequan'];
        $danquan->dantoc = $data['dantoc'];
        $danquan->tongiao = $data['tongiao'];
        $danquan->thuongtru = $data['thuongtru'];
        $danquan->noio = $data['noio'];



        $danquan->tinhhinhgiadinh = $data['tinhhinhgiadinh'];
        $danquan->tinhhinhbanthan = $data['tinhhinhbanthan'];


        // th??m ???nh
        // 
        // 
        $get_image = $request->file('anh34');
        $path = 'public/backend/images/';
        if($get_image){

            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode(',',$get_name_image));
            $new_image = $name_image.rand(0,9999).'.'.$get_image->getClientOriginalName();
            $get_image->move($path,$new_image);
            $danquan->anh34 = $new_image;
        }
        $danquan->save();
        if ($data) {
        toast()->success('Ch???nh s???a h??? s?? th??nh c??ng'); // ho???c c?? th??? d??ng alert('Post Created','Successfully', 'success');
    } else {
        toast()->error('L???i', 'Vui l??ng ??i???n ????ng th??ng tin.'); // ho???c c?? th??? d??ng alert('Post Created','Something went wrong!', 'error');
    }

        
        
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
        $danquan = DanQuan::find($id);
        if(!empty($danquan->anh34)){
            unlink('public/backend/images/'.$danquan->anh34);
        }
        $danquan->delete();
        toast()->success('X??a th??nh c??ng');
        return redirect()->back();
    }
   
}
