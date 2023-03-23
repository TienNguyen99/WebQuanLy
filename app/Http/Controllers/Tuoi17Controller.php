<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tuoi17;
// use App\Models\ThanhPhan;
use Carbon\Carbon;
use PDF;
use PhpOffice\PhpWord\TemplateProcessor;
use Validator;

class Tuoi17Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Tuoi17::all();

        return view('admincp.tongtuoi17.tongtuoi17_them',compact('list'));
    }
//         public function indexTuoi17()
//     {
//         $list = tuoi17::whereHas('thanhphan', function ($query) {
//     return $query->where('id', '=', 17);
// })->get();
//         $thanhphan = ThanhPhan::pluck('title','id');

//         return view('admincp.tuoi17.tuoi17_them',compact('list','thanhphan'));
//     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // return view('admincp.tongtuoi17.tongtuoi17_them');
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
        $tuoi17 = new Tuoi17();

        $tuoi17->tenkhaisinh = $data['tenkhaisinh'];
        $tuoi17->tenkhac = $data['tenkhac'];
        $tuoi17->sdt = $data['sdt'];
        $tuoi17->gioitinh = $data['gioitinh'];

        // $tuoi17->namsinh  = Carbon::parse($data['namsinh'])->format('y-d-m');
        $tuoi17->namsinh = Carbon::createFromFormat('d/m/Y', $data['namsinh']);
        $tuoi17->congancapngay = Carbon::createFromFormat('d/m/Y', $data['congancapngay']);


        $tuoi17->cancuoc = $data['cancuoc'];
        $tuoi17->thanhphangiadinh = $data['thanhphangiadinh'];
        $tuoi17->banthan = $data['banthan'];
        $tuoi17->vanhoa = $data['vanhoa'];

        $tuoi17->vaonam = Carbon::createFromFormat('d/m/Y', $data['vaonam']);
        $tuoi17->tinhtrangcha = $data['tinhtrangcha'];
        $tuoi17->bienche = $data['bienche'];
        $tuoi17->tencha = $data['tencha'];
        $tuoi17->namsinhcha = $data['namsinhcha'];
        $tuoi17->nghenghiepcha = $data['nghenghiepcha'];
        $tuoi17->tinhtrangme = $data['tinhtrangme'];
        $tuoi17->tenme = $data['tenme'];
        $tuoi17->namsinhme = $data['namsinhme'];
        $tuoi17->nghenghiepme = $data['nghenghiepme'];
        $tuoi17->socon = $data['socon'];
        $tuoi17->contrai = $data['contrai'];
        $tuoi17->congai = $data['congai'];
        $tuoi17->banthanla = $data['banthanla'];


        $tuoi17->noidkks = $data['noidkks'];
        $tuoi17->quequan = $data['quequan'];
        $tuoi17->dantoc = $data['dantoc'];
        $tuoi17->tongiao = $data['tongiao'];
        $tuoi17->thuongtru = $data['thuongtru'];
        $tuoi17->noio = $data['noio'];



        $tuoi17->tinhhinhgiadinh = $data['tinhhinhgiadinh'];
        $tuoi17->tinhhinhgiadinhcha = $data['tinhhinhgiadinhcha'];
        $tuoi17->tinhhinhgiadinhme = $data['tinhhinhgiadinhme'];
        $tuoi17->tinhhinhbanthan = $data['tinhhinhbanthan'];


        // thêm ảnh
        //
        //
        $get_image = $request->file('anh34');
        // $take_image = $request->input('anh34');
        $path = 'public/backend/images/';
        if($get_image){

            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode(',',$get_name_image));
            $new_image = $name_image.rand(0,9999).'.'.$get_image->getClientOriginalName();
            $get_image->move($path,$new_image);
            $tuoi17->anh34 = $new_image;
        }
        // if($take_image){
        //     $image_parts = explode(";base64,", $take_image);
        //     $image_type_aux = explode("image/", $image_parts[0]);
        //     $image_type = $image_type_aux[1];

        //     $image_base64 = base64_decode($image_parts[1]);
        //     $fileName = uniqid() . '.png';
        //     $file = $path . $fileName;

        //     Storage::put($file, $image_base64);
        //     $tuoi17->anh34 = $fileName;
        // }

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
        $tuoi17->save();





        if ($tuoi17->save()) {
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

        $pdf = Tuoi17::where('id',$pdfid)->first();
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
        $tuoi17 =  Tuoi17::find($id);
        $tuoi17->tenkhaisinh = $data['tenkhaisinh'];
        $tuoi17->tenkhac = $data['tenkhac'];
        $tuoi17->sdt = $data['sdt'];
        $tuoi17->gioitinh = $data['gioitinh'];

        // $tuoi17->namsinh  = Carbon::parse($data['namsinh'])->format('y-d-m');
        $tuoi17->namsinh = Carbon::createFromFormat('d/m/Y', $data['namsinh']);
        $tuoi17->congancapngay = Carbon::createFromFormat('d/m/Y', $data['congancapngay']);


        $tuoi17->cancuoc = $data['cancuoc'];
        $tuoi17->thanhphangiadinh = $data['thanhphangiadinh'];
        $tuoi17->banthan = $data['banthan'];
        $tuoi17->vanhoa = $data['vanhoa'];

        $tuoi17->vaonam = Carbon::createFromFormat('d/m/Y', $data['vaonam']);
        $tuoi17->ranam = Carbon::createFromFormat('d/m/Y', $data['ranam']);
        $tuoi17->tinhtrangcha = $data['tinhtrangcha'];
        $tuoi17->bienche = $data['bienche'];
        $tuoi17->tencha = $data['tencha'];
        $tuoi17->namsinhcha = $data['namsinhcha'];
        $tuoi17->nghenghiepcha = $data['nghenghiepcha'];
        $tuoi17->tinhtrangme = $data['tinhtrangme'];
        $tuoi17->tenme = $data['tenme'];
        $tuoi17->namsinhme = $data['namsinhme'];
        $tuoi17->nghenghiepme = $data['nghenghiepme'];
        $tuoi17->socon = $data['socon'];
        $tuoi17->contrai = $data['contrai'];
        $tuoi17->congai = $data['congai'];
        $tuoi17->banthanla = $data['banthanla'];


        $tuoi17->noidkks = $data['noidkks'];
        $tuoi17->quequan = $data['quequan'];
        $tuoi17->dantoc = $data['dantoc'];
        $tuoi17->tongiao = $data['tongiao'];
        $tuoi17->thuongtru = $data['thuongtru'];
        $tuoi17->noio = $data['noio'];



        $tuoi17->tinhhinhgiadinh = $data['tinhhinhgiadinh'];
        $tuoi17->tinhhinhgiadinhcha = $data['tinhhinhgiadinhcha'];
        $tuoi17->tinhhinhgiadinhme = $data['tinhhinhgiadinhme'];
        $tuoi17->tinhhinhbanthan = $data['tinhhinhbanthan'];
        // thêm ảnh
        //
        //
        $get_image = $request->file('anh34');
        $path = 'public/backend/images/';
        if($get_image){
            if(!empty($tuoi17->anh34)){
                unlink('public/backend/images/'.$tuoi17->anh34);
            }
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode(',',$get_name_image));
            $new_image = $name_image.rand(0,9999).'.'.$get_image->getClientOriginalName();
            $get_image->move($path,$new_image);
            $tuoi17->anh34 = $new_image;
        }
        $tuoi17->save();

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
        $tuoi17 = Tuoi17::find($id);
        if(!empty($tuoi17->anh34)){
            unlink('public/backend/images/'.$tuoi17->anh34);
        }
        $tuoi17->delete();
        toast()->success('Xóa thành công');
        return redirect()->back();
    }
    public function wordExport($id){
        $tuoi17 = Tuoi17::find($id);
        // dd($tuoi17);
        $templateProcessor = new TemplateProcessor('public/backend/word-template/tuoi17.docx');
        $templateProcessor->setValue('tenkhaisinh',$tuoi17->tenkhaisinh);
        $templateProcessor->setValue('tenkhac',$tuoi17->tenkhac);
        $templateProcessor->setValue('sdt',$tuoi17->sdt);
        // $templateProcessor->setValue('congancapngay',Carbon::createFromFormat('d/m/Y', $tuoi17->congancapngay));
        // $templateProcessor->setValue('namsinh',Carbon::createFromFormat('d/m/Y', $tuoi17->namsinh));
        $templateProcessor->setValue('cancuoc',$tuoi17->cancuoc);
        $templateProcessor->setValue('namsinh',$tuoi17->namsinh);
        $templateProcessor->setValue('congancapngay',$tuoi17->congancapngay);

        $templateProcessor->setValue('thanhphangiadinh',$tuoi17->thanhphangiadinh);
        $templateProcessor->setValue('banthan',$tuoi17->banthan);
        $templateProcessor->setValue('vanhoa',$tuoi17->vanhoa);
        $templateProcessor->setValue('tinhtrangcha',$tuoi17->tinhtrangcha);
        $templateProcessor->setValue('tencha',$tuoi17->tencha);
        $templateProcessor->setValue('namsinhcha',$tuoi17->namsinhcha);
        $templateProcessor->setValue('nghenghiepcha',$tuoi17->nghenghiepcha);
        $templateProcessor->setValue('tinhtrangme',$tuoi17->tinhtrangme);
        $templateProcessor->setValue('tenme',$tuoi17->tenme);
        $templateProcessor->setValue('namsinhme',$tuoi17->namsinhme);
        $templateProcessor->setValue('nghenghiepme',$tuoi17->nghenghiepme);
        $templateProcessor->setValue('socon',$tuoi17->socon);
        $templateProcessor->setValue('contrai',$tuoi17->contrai);
        $templateProcessor->setValue('congai',$tuoi17->congai);
        $templateProcessor->setValue('banthanla',$tuoi17->banthanla);
        $templateProcessor->setValue('noidkks',$tuoi17->noidkks);
        $templateProcessor->setValue('quequan',$tuoi17->quequan);
        $templateProcessor->setValue('dantoc',$tuoi17->dantoc);
        $templateProcessor->setValue('tongiao',$tuoi17->tongiao);
        $templateProcessor->setValue('thuongtru',$tuoi17->thuongtru);
        $templateProcessor->setValue('noio',$tuoi17->noio);
        $tuoi17->tinhhinhbanthan = str_replace("\n", '</w:t><w:br/><w:t>', $tuoi17->tinhhinhbanthan);
        $tuoi17->tinhhinhgiadinhme = str_replace("\n", '</w:t><w:br/><w:t>', $tuoi17->tinhhinhgiadinhme);
        $tuoi17->tinhhinhgiadinhcha = str_replace("\n", '</w:t><w:br/><w:t>', $tuoi17->tinhhinhgiadinhcha);
        $templateProcessor->setValue('tinhhinhbanthan',$tuoi17->tinhhinhbanthan);
        $templateProcessor->setValue('tinhhinhgiadinh',$tuoi17->tinhhinhgiadinh);
        $templateProcessor->setValue('tinhhinhgiadinhme',$tuoi17->tinhhinhgiadinhme);
        $templateProcessor->setValue('tinhhinhgiadinhcha',$tuoi17->tinhhinhgiadinhcha);
        $fileName = $tuoi17->tenkhaisinh;
        $templateProcessor->saveAs($fileName.'.docx');
        return response()->download($fileName.'.docx')->deleteFileAfterSend(true);
    }

}

