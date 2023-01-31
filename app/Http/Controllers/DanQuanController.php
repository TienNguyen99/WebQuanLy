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
    public function show_dqtt()
    {
        $list = DanQuan::with('thanhphan')
        ->where('thanhphan_id','thanhphan.')
        ->get();
        // ->toSql();

        // dd($list);
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
        $danquan->thanhphangiadinh = $data['thanhphangiadinh'];
        $danquan->banthan = $data['banthan'];
        $danquan->vanhoa = $data['vanhoa'];
        $danquan->vaonam = $data['vaonam'];
        $danquan->tinhtrangcha = $data['tinhtrangcha'];
        $danquan->tencha = $data['tencha'];
        $danquan->namsinhcha = $data['namsinhcha'];
        $danquan->nghenghiepcha = $data['nghenghiepcha'];
        $danquan->tinhtrangme = $data['tinhtrangme'];
        $danquan->tenme = $data['tenme'];
        $danquan->namsinhme = $data['namsinhme'];
        $danquan->nghenghiepme = $data['nghenghiepme'];
        $danquan->socon = $data['socon'];
        $danquan->contrai = $data['contrai'];
        $danquan->congai = $data['congai'];
        $danquan->banthanla = $data['banthanla'];
        
        
        $danquan->noidkks = $data['noidkks'];
        $danquan->quequan = $data['quequan'];
        $danquan->dantoc = $data['dantoc'];
        $danquan->tongiao = $data['tongiao'];
        $danquan->thuongtru = $data['thuongtru'];
        $danquan->noio = $data['noio'];



        $danquan->tinhhinhgiadinh = $data['tinhhinhgiadinh'];
        $danquan->tinhhinhbanthan = $data['tinhhinhbanthan'];


        // thêm ảnh
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
        toast()->success('Tạo hồ sơ thành công'); // hoặc có thể dùng alert('Post Created','Successfully', 'success');
    } else {
        toast()->error('Lỗi', 'Vui lòng điền đúng thông tin.'); // hoặc có thể dùng alert('Post Created','Something went wrong!', 'error');
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
        
        // $danquan->namsinh  = Carbon::parse($data['namsinh'])->format('y-d-m');
        $danquan->namsinh = Carbon::createFromFormat('d/m/Y', $data['namsinh']);
        $danquan->congancapngay = Carbon::createFromFormat('d/m/Y', $data['congancapngay']);
        
        $danquan->thanhphan_id = $data['thanhphan_id'];
        $danquan->cancuoc = $data['cancuoc'];
        $danquan->thanhphangiadinh = $data['thanhphangiadinh'];
        $danquan->banthan = $data['banthan'];
        $danquan->vanhoa = $data['vanhoa'];
        $danquan->vaonam = $data['vaonam'];
        $danquan->tinhtrangcha = $data['tinhtrangcha'];
        $danquan->tencha = $data['tencha'];
        $danquan->namsinhcha = $data['namsinhcha'];
        $danquan->nghenghiepcha = $data['nghenghiepcha'];
        $danquan->tinhtrangme = $data['tinhtrangme'];
        $danquan->tenme = $data['tenme'];
        $danquan->namsinhme = $data['namsinhme'];
        $danquan->nghenghiepme = $data['nghenghiepme'];
        $danquan->socon = $data['socon'];
        $danquan->contrai = $data['contrai'];
        $danquan->congai = $data['congai'];
        $danquan->banthanla = $data['banthanla'];
        
        
        $danquan->noidkks = $data['noidkks'];
        $danquan->quequan = $data['quequan'];
        $danquan->dantoc = $data['dantoc'];
        $danquan->tongiao = $data['tongiao'];
        $danquan->thuongtru = $data['thuongtru'];
        $danquan->noio = $data['noio'];



        $danquan->tinhhinhgiadinh = $data['tinhhinhgiadinh'];
        $danquan->tinhhinhbanthan = $data['tinhhinhbanthan'];
        // thêm ảnh
        // 
        // 
        $get_image = $request->file('anh34');
        $path = 'public/backend/images/';
        if($get_image){
            if(!empty($danquan->anh34)){
                unlink('public/backend/images/'.$danquan->anh34);
            }
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode(',',$get_name_image));
            $new_image = $name_image.rand(0,9999).'.'.$get_image->getClientOriginalName();
            $get_image->move($path,$new_image);
            $danquan->anh34 = $new_image;
        }
        $danquan->save();
        if ($data) {
        toast()->success('Chỉnh sửa hồ sơ thành công'); // hoặc có thể dùng alert('Post Created','Successfully', 'success');
    } else {
        toast()->error('Lỗi', 'Vui lòng điền đúng thông tin.'); // hoặc có thể dùng alert('Post Created','Something went wrong!', 'error');
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
        toast()->success('Xóa thành công');
        return redirect()->back();
    }
   
}
