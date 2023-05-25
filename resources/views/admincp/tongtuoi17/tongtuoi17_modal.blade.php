        <div class="modal fade text-left w-100" id="tuoi17modal{{$show_tongtuoi17->id}}" tabindex="-1"
          role="dialog" aria-labelledby="myModalLabel20" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-full"
          role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel20">Chỉnh sửa hồ sơ Thanh niên tuối 17</h4>
              <button type="button" class="close" data-bs-dismiss="modal"
              aria-label="Close">
              <i data-feather="x"></i>
          </button>
      </div>
      <div class="modal-body">
        <section id="multiple-column-form">
          <div class="row match-height">
            <div class="col-12">
              <div class="card">

                <div class="card-content">
                  <div class="card-body">
                    {!! Form::open(['route'=>['tuoi17.update',$show_tongtuoi17->id],'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
                    <div class="row">
                      <div class="col-sm-6"><img src="{{asset('public/backend/images/'.$show_tongtuoi17->anh34)}}" width="100px" height="100%" alt="...">
                      </div>

                      <div class="col-12">
                       <div class="form-group">
                         {!! Form::label('Image', 'Chỉnh sửa ảnh', []) !!}
                         {!! Form::file('anh34', ['class'=>'form-control','id'=>'formFile' ]) !!}
                     </div>
                 </div>
                 <div class="col-12">
                  <div class="divider">
                    <div class="divider-text">Hồ sơ Thanh niên tuối 17</div>
                </div>
            </div>

            <div class="col-sm-2">
             <div class="form-group">
               {!! Form::label('tenkhaisinh', 'Tên khai sinh', []) !!}
               {!! Form::text('tenkhaisinh',isset($show_tongtuoi17) ? $show_tongtuoi17->tenkhaisinh: '', ['class'=>'form-control','placeholder'=>'Nhập tên khai sinh','id'=>'tenkhaisinh','required']) !!}
           </div>
       </div>
       <div class="col-sm-2">
         <div class="form-group">
           {!! Form::label('tenkhac', 'Tên khác', []) !!}
           {!! Form::text('tenkhac',isset($show_tongtuoi17) ? $show_tongtuoi17->tenkhac: '', ['class'=>'form-control','placeholder'=>'Nhập tên khác','id'=>'tenkhac']) !!}
       </div>
   </div>
   <div class="col-sm-2">
     <div class="form-group">
       {!! Form::label('sdt', 'Số điện thoại', []) !!}
       {!! Form::text('sdt',isset($show_tongtuoi17) ? $show_tongtuoi17->sdt: '', ['class'=>'form-control','placeholder'=>'Nhập số điện thoại','id'=>'sdt']) !!}
   </div>
</div>
<div class="col-sm-2">
 <div class="form-group">
   {!! Form::label('gioitinh', 'Giới tính', []) !!}
   {!! Form::select('gioitinh', ['1'=>'Nam','0'=>'Nữ'],isset($show_tongtuoi17) ? $show_tongtuoi17->gioitinh: '', ['class'=>'form-control']) !!}
</div>
</div>
<div class="col-sm-2">
 <div class="form-group">

  {!! Form::label('namsinh', 'Năm sinh ' ) !!}

  {!! Form::text('namsinh', isset($show_tongtuoi17) ? Carbon\Carbon::parse($show_tongtuoi17->namsinh)->format('d/m/Y'): '', ['class' => 'form-control','placeholder'=>'dd/mm/yy','id'=>
  'namsinh']) !!}
</div>
</div>


<div class="col-sm-2">
   <div class="form-group">
     {!! Form::label('cancuoc', 'CMND / CCCD', []) !!}
     {!! Form::text('cancuoc',isset($show_tongtuoi17) ? $show_tongtuoi17->cancuoc: '', ['class'=>'form-control','placeholder'=>'Nhập số căn cước','id'=>'cancuoc']) !!}
 </div>
</div>
<div class="col-sm-2">
   <div class="form-group">

    {!! Form::label('congancapngay', 'Cấp ngày ' ) !!}

    {!! Form::text('congancapngay', isset($show_tongtuoi17) ? Carbon\Carbon::parse($show_tongtuoi17->congancapngay)->format('d/m/Y'): '', ['class' => 'form-control','placeholder'=>'dd/mm/yy','id'=>
    'congancapngay','required']) !!}
</div>
</div>

<div class="col-sm-2">
 <div class="form-group">
   {!! Form::label('dantoc', 'Dân tộc', []) !!}
   {!! Form::text('dantoc',isset($show_tongtuoi17) ? $show_tongtuoi17->dantoc: '', ['class'=>'form-control','placeholder'=>'Dân tộc','id'=>'dantoc']) !!}
</div>
</div>
<div class="col-sm-2">
 <div class="form-group">
   {!! Form::label('tongiao', 'Tôn giáo', []) !!}
   {!! Form::text('tongiao',isset($show_tongtuoi17) ? $show_tongtuoi17->tongiao: '', ['class'=>'form-control','id'=>'tongiao']) !!}
</div>
</div>
<div class="col-sm-2">
 <div class="form-group">
   {!! Form::label('quoctich', 'Quốc tịch', []) !!}
   {!! Form::text('quoctich','Việt Nam', ['class'=>'form-control','id'=>'quoctich','disabled']) !!}
</div>
</div>
<div class="col-sm-2">
 <div class="form-group">
   {!! Form::label('thanhphangiadinh', 'Thành phần gia đình', []) !!}
   {!! Form::select('thanhphangiadinh', ['0'=>'Kinh Doanh','1'=>'Buôn bán','2'=>'Nội trợ','3'=>'Công nhân'],isset($show_tongtuoi17) ? $show_tongtuoi17->thanhphangiadinh: '', ['class'=>'form-control']) !!}
</div>
</div>
<div class="col-sm-2">
 <div class="form-group">
   {!! Form::label('banthan', 'Bản thân', []) !!}
   {!! Form::text('banthan',isset($show_tongtuoi17) ? $show_tongtuoi17->banthan: '', ['class'=>'form-control','id'=>'banthan']) !!}
</div>
</div>
<div class="col-sm-2 ">
 <div class="form-group">
   {!! Form::label('vanhoa', 'Văn hoá', []) !!}
   {!! Form::text('vanhoa',isset($show_tongtuoi17) ? $show_tongtuoi17->vanhoa: '', ['class'=>'form-control','id'=>'vanhoa']) !!}
</div>
</div>
<div class="col-sm-2 ">
 <div class="form-group">
   {!! Form::label('vaonam', 'Ngày đăng ký tuổi 17', []) !!}
   {!! Form::text('vaonam', isset($show_tongtuoi17) ? Carbon\Carbon::parse($show_tongtuoi17->vaonam)->format('d/m/Y'): '', ['class' => 'form-control','placeholder'=>'dd/mm/yy','id'=>
   'vaonam','required']) !!}
</div>
</div>
<div class="col-sm-3 ">
   <div class="form-group">
    {!! Form::label('khupho', 'Khu phố', []) !!}

    <select name="khupho" id="khupho" class ="form-control">
        <option <?=$show_tongtuoi17->khupho=="Nội Hoá 1"?'selected="selected"':'';?> value="Nội Hoá 1" class="dr">Nội Hoá 1</option>
        <option <?=$show_tongtuoi17->khupho=="Nội Hoá 2"?'selected="selected"':'';?> value="Nội Hoá 2" class="dr">Nội Hoá 2</option>
        <option <?=$show_tongtuoi17->khupho=="Bình Thung 1"?'selected="selected"':'';?> value="Bình Thung 1" class="dr">Bình Thung 1</option>
        <option <?=$show_tongtuoi17->khupho=="Bình Thung 2"?'selected="selected"':'';?> value="Bình Thung 2" class="dr">Bình Thung 2</option>
        <option <?=$show_tongtuoi17->khupho=="Châu Thới"?'selected="selected"':'';?> value="Châu Thới" class="dr">Châu Thới</option>
    </select>
</div>
</div>
{{--                    <div class="col-sm-2 ">
 <div class="form-group">
   {!! Form::label('ranam', 'Năm hoàn thành DQTV', []) !!}
   {!! Form::text('ranam', isset($show_tongtuoi17) ? Carbon\Carbon::parse($show_tongtuoi17->ranam)->format('d/m/Y'): '', ['class' => 'form-control','id'=>
   'ranam']) !!}

</div>
</div> --}}
                  {{--  <div class="col-sm-4 ">
   <div class="form-group">
     {!! Form::label('bienche', 'Biên chế', []) !!}
     {!! Form::select('bienche', ['1'=>'Đã biên chế','0'=>'Chưa biên chế'],isset($show_tongtuoi17) ? $show_tongtuoi17->bienche: '', ['class'=>'form-control']) !!}

 </div>
</div> --}}
<div class="w-100"></div>

<div class="col-sm-3 ">
 <div class="form-group">
  {!! Form::label('tinhtrangcha', 'Sống / Mất', []) !!}
  <select name="tinhtrangcha" id="tinhtrangcha" class ="form-control">
    <option <?=$show_tongtuoi17->tinhtrangcha=="Sống"?'selected="selected"':'';?> value="Sống" class="dr">Sống</option>
    <option <?=$show_tongtuoi17->tinhtrangcha=="Mất"?'selected="selected"':'';?> value="Mất" class="dr">Mất</option>
</select>
</div>
</div>
<div class="col-sm-3">
   <div class="form-group">
     {!! Form::label('tencha', 'Tên cha', []) !!}
     {!! Form::text('tencha',isset($show_tongtuoi17) ? $show_tongtuoi17->tencha: '', ['class'=>'form-control','id'=>'tencha']) !!}
 </div>
</div>
<div class="col-sm-3">
   <div class="form-group">
     {!! Form::label('namsinhcha', 'Năm sinh cha', []) !!}
     {!! Form::text('namsinhcha',isset($show_tongtuoi17) ? $show_tongtuoi17->namsinhcha: '', ['class'=>'form-control','id'=>'namsinhcha']) !!}
 </div>
</div>
<div class="col-sm-3">
   <div class="form-group">
     {!! Form::label('nghenghiepcha', 'Nghề nghiệp cha', []) !!}
     {!! Form::text('nghenghiepcha',isset($show_tongtuoi17) ? $show_tongtuoi17->nghenghiepcha: '', ['class'=>'form-control','id'=>'nghenghiepcha']) !!}
 </div>
</div>

<div class="col-sm-3 ">
 <div class="form-group">
  {!! Form::label('tinhtrangme', 'Sống / Mất', []) !!}
  <select name="tinhtrangme" id="tinhtrangme" class ="form-control">
    <option <?=$show_tongtuoi17->tinhtrangme=="Sống"?'selected="selected"':'';?> value="Sống" class="dr">Sống</option>
    <option <?=$show_tongtuoi17->tinhtrangme=="Mất"?'selected="selected"':'';?> value="Mất" class="dr">Mất</option>
</select>
</div>
</div>
<div class="col-sm-3">
   <div class="form-group">
     {!! Form::label('tenme', 'Tên mẹ', []) !!}
     {!! Form::text('tenme',isset($show_tongtuoi17) ? $show_tongtuoi17->tenme: '', ['class'=>'form-control','id'=>'tenme']) !!}
 </div>
</div>
<div class="col-sm-3">
   <div class="form-group">
     {!! Form::label('namsinhme', 'Năm sinh mẹ', []) !!}
     {!! Form::text('namsinhme',isset($show_tongtuoi17) ? $show_tongtuoi17->namsinhme: '', ['class'=>'form-control','id'=>'namsinhme']) !!}
 </div>
</div>
<div class="col-sm-3">
   <div class="form-group">
     {!! Form::label('nghenghiepme', 'Nghề nghiệp mẹ', []) !!}
     {!! Form::text('nghenghiepme',isset($show_tongtuoi17) ? $show_tongtuoi17->nghenghiepme: '', ['class'=>'form-control','id'=>'nghenghiepme']) !!}
 </div>
</div>
<div class="col-sm-3">
 <div class="form-group">
   {!! Form::label('socon', 'Cha mẹ có', []) !!}
   {!! Form::select('socon', ['0','1','2','3','4','5'],isset($show_tongtuoi17) ? $show_tongtuoi17->socon: '', ['class'=>'form-control']) !!}
</div>
</div>
<div class="col-sm-3">
 <div class="form-group">
  {!! Form::label('contrai', 'Con trai', []) !!}
  {!! Form::select('contrai', ['0','1','2','3','4','5'],isset($show_tongtuoi17) ? $show_tongtuoi17->contrai: '', ['class'=>'form-control']) !!}
</div>
</div>
<div class="col-sm-3">
   <div class="form-group">
    {!! Form::label('congai', 'Con gái', []) !!}
    {!! Form::select('congai', ['0','1','2','3','4','5'],isset($show_tongtuoi17) ? $show_tongtuoi17->congai: '', ['class'=>'form-control']) !!}
</div>
</div>
<div class="col-sm-3">
 <div class="form-group">
  {!! Form::label('banthanla', 'Bản thân là con thứ', []) !!}
  {!! Form::select('banthanla', ['Một','Hai','Ba','Bốn','Năm'],isset($show_tongtuoi17) ? $show_tongtuoi17->banthanla: '', ['class'=>'form-control']) !!}
</div>
</div>
<div class="col-sm-6">
   <div class="form-group">
     {!! Form::label('noidkks', 'Nơi đăng ký khai sinh', []) !!}
     {!! Form::text('noidkks',isset($show_tongtuoi17) ? $show_tongtuoi17->noidkks: '', ['class'=>'form-control','id'=>'noidkks']) !!}
 </div>
</div>
<div class="col-sm-6">
   <div class="form-group">
    {!! Form::label('quequan', 'Quê quán', []) !!}
    {!! Form::text('quequan',isset($show_tongtuoi17) ? $show_tongtuoi17->quequan: '', ['class'=>'form-control','id'=>'quequan']) !!}
</div>
</div>
<div class="col-sm-6">
 <div class="form-group">
  {!! Form::label('thuongtru', 'Thường trú', []) !!}
  {!! Form::text('thuongtru',isset($show_tongtuoi17) ? $show_tongtuoi17->thuongtru: '', ['class'=>'form-control','id'=>'thuongtru']) !!}
</div>
</div>
<div class="col-sm-6">
   <div class="form-group">
    {!! Form::label('noio', 'Nơi ở', []) !!}
    {!! Form::text('noio',isset($show_tongtuoi17) ? $show_tongtuoi17->noio: '', ['class'=>'form-control','id'=>'noio']) !!}
</div>
</div>



<div class="col-sm-6">
   <div class="form-group">
     {!! Form::label('tinhhinhgiadinhcha', 'TÌNH HÌNH KINH TẾ, CHÍNH TRỊ CỦA GIA ĐÌNH (Cha)', []) !!}
     {!! Form::textarea('tinhhinhgiadinhcha',isset($show_tongtuoi17) ? $show_tongtuoi17->tinhhinhgiadinhcha: '', ['class'=>'form-control','id'=>'tinhhinhgiadinhcha']) !!}
 </div>
</div>
<div class="col-sm-6">
   <div class="form-group">
     {!! Form::label('tinhhinhgiadinhme', 'TÌNH HÌNH KINH TẾ, CHÍNH TRỊ CỦA GIA ĐÌNH (MẸ)', []) !!}
     {!! Form::textarea('tinhhinhgiadinhme',isset($show_tongtuoi17) ? $show_tongtuoi17->tinhhinhgiadinhme: '', ['class'=>'form-control','id'=>'tinhhinhgiadinhme']) !!}
 </div>
</div>
<div class="col-sm-6">
 <div class="form-group">
   {!! Form::label('tinhhinhgiadinh', 'TÌNH HÌNH KINH TẾ, CHÍNH TRỊ CỦA GIA ĐÌNH', []) !!}
   {!! Form::textarea('tinhhinhgiadinh',isset($show_tongtuoi17) ? $show_tongtuoi17->tinhhinhgiadinh: '', ['class'=>'form-control','id'=>'tinhhinhgiadinh']) !!}
</div>
</div>
<div class="col-sm-6">
 <div class="form-group">
   {!! Form::label('tinhhinhbanthan', 'TÌNH HÌNH KINH TẾ,CHÍNH TRỊ, QUÁ TRÌNH CÔNG TÁC CỦA BẢN THÂN ', []) !!}
   {!! Form::textarea('tinhhinhbanthan',isset($show_tongtuoi17) ? $show_tongtuoi17->tinhhinhbanthan: '', ['class'=>'form-control','id'=>'tinhhinhbanthan']) !!}
</div>
</div>




<div class="modal-footer">
    <div class="col-12" align="right">
      {!! Form::submit('Chỉnh sửa', ['class'=>'btn btn-primary me-1 mb-1']) !!}
  </div>
</div>
</div>
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>
</section>
</div>



</div>
</div>
</div>
