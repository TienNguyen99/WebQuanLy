<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanQuan;
use App\Models\ThanhPhan;
use Carbon\Carbon;
use PDF;
use PhpOffice\PhpWord\TemplateProcessor;
use Validator;

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
        $danquan->thanhphangiadinh = $data['thanhphangiadinh'];
        $danquan->banthan = $data['banthan'];
        $danquan->vanhoa = $data['vanhoa'];
        
        $danquan->vaonam = Carbon::createFromFormat('d/m/Y', $data['vaonam']);
        $danquan->tinhtrangcha = $data['tinhtrangcha'];
        $danquan->bienche = $data['bienche'];
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
        $danquan->tinhhinhgiadinhcha = $data['tinhhinhgiadinhcha'];
        $danquan->tinhhinhgiadinhme = $data['tinhhinhgiadinhme'];
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

        $messages = [

            'sdt.max' => 'gồm 11 số',
            'namsinh.date_format' => 'Nhập đúng định dạng ngày/tháng/năm',
            'vaonam.date_format' => 'Nhập đúng định dạng ngày/tháng/năm',
            'congancapngay.date_format' => 'Nhập đúng định dạng ngày/tháng/năm',

        ];

        $this->validate($request,[

            'sdt'=>'max:11',
            'namsinh'=>'date_format:d/m/Y',
            'vaonam'=>'date_format:d/m/Y',
            'congancapngay'=>'date_format:d/m/Y',


        ], $messages);



        // lưu data csdl
        $danquan->save();





        if ($danquan->save()) {
        toast()->success('Tạo hồ sơ thành công'); // hoặc có thể dùng alert('Post Created','Successfully', 'success');
    }else
    {
        toast()->error('Lỗi');
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
        
        $danquan->vaonam = Carbon::createFromFormat('d/m/Y', $data['vaonam']);
        $danquan->ranam = Carbon::createFromFormat('d/m/Y', $data['ranam']);
        $danquan->tinhtrangcha = $data['tinhtrangcha'];
        $danquan->bienche = $data['bienche'];
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
        $danquan->tinhhinhgiadinhcha = $data['tinhhinhgiadinhcha'];
        $danquan->tinhhinhgiadinhme = $data['tinhhinhgiadinhme'];
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
    public function wordExport($id){
        $danquan = DanQuan::find($id);
        // dd($danquan);
        $templateProcessor = new TemplateProcessor('public/backend/word-template/tuoi17.docx');
        $templateProcessor->setValue('tenkhaisinh',$danquan->tenkhaisinh);
        $templateProcessor->setValue('tenkhac',$danquan->tenkhac);
        $templateProcessor->setValue('sdt',$danquan->sdt);
        // $templateProcessor->setValue('congancapngay',Carbon::createFromFormat('d/m/Y', $danquan->congancapngay));
        // $templateProcessor->setValue('namsinh',Carbon::createFromFormat('d/m/Y', $danquan->namsinh));
        $templateProcessor->setValue('cancuoc',$danquan->cancuoc);
        $templateProcessor->setValue('namsinh',$danquan->namsinh);
        $templateProcessor->setValue('congancapngay',$danquan->congancapngay);

        $templateProcessor->setValue('thanhphangiadinh',$danquan->thanhphangiadinh);
        $templateProcessor->setValue('banthan',$danquan->banthan);
        $templateProcessor->setValue('vanhoa',$danquan->vanhoa);
        $templateProcessor->setValue('tinhtrangcha',$danquan->tinhtrangcha);
        $templateProcessor->setValue('tencha',$danquan->tencha);
        $templateProcessor->setValue('namsinhcha',$danquan->namsinhcha);
        $templateProcessor->setValue('nghenghiepcha',$danquan->nghenghiepcha);
        $templateProcessor->setValue('tinhtrangme',$danquan->tinhtrangme);
        $templateProcessor->setValue('tenme',$danquan->tenme);
        $templateProcessor->setValue('namsinhme',$danquan->namsinhme);
        $templateProcessor->setValue('nghenghiepme',$danquan->nghenghiepme);
        $templateProcessor->setValue('socon',$danquan->socon);
        $templateProcessor->setValue('contrai',$danquan->contrai);
        $templateProcessor->setValue('congai',$danquan->congai);
        $templateProcessor->setValue('banthanla',$danquan->banthanla);
        $templateProcessor->setValue('noidkks',$danquan->noidkks);
        $templateProcessor->setValue('quequan',$danquan->quequan);
        $templateProcessor->setValue('dantoc',$danquan->dantoc);
        $templateProcessor->setValue('tongiao',$danquan->tongiao);
        $templateProcessor->setValue('thuongtru',$danquan->thuongtru);
        $templateProcessor->setValue('noio',$danquan->noio);
        $danquan->tinhhinhbanthan = str_replace("\n", '</w:t><w:br/><w:t>', $danquan->tinhhinhbanthan);
        $danquan->tinhhinhgiadinhme = str_replace("\n", '</w:t><w:br/><w:t>', $danquan->tinhhinhgiadinhme);
        $danquan->tinhhinhgiadinhcha = str_replace("\n", '</w:t><w:br/><w:t>', $danquan->tinhhinhgiadinhcha);
        $templateProcessor->setValue('tinhhinhbanthan',$danquan->tinhhinhbanthan);
        $templateProcessor->setValue('tinhhinhgiadinh',$danquan->tinhhinhgiadinh);
        $templateProcessor->setValue('tinhhinhgiadinhme',$danquan->tinhhinhgiadinhme);
        $templateProcessor->setValue('tinhhinhgiadinhcha',$danquan->tinhhinhgiadinhcha);
        $fileName = $danquan->tenkhaisinh;
        $templateProcessor->saveAs($fileName.'.docx');
        return response()->download($fileName.'.docx')->deleteFileAfterSend(true);
    } 

}

