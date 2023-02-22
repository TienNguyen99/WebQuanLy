
<div class="modal fade text-left w-100" id="themmodal" tabindex="-1"
role="dialog" aria-labelledby="myModalLabel20" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-full"
role="document">
<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title" id="myModalLabel20">Thêm hồ sơ dân quân</h4>
    <button type="button" class="close" data-bs-dismiss="modal"
    aria-label="Close">
    <i data-feather="x"></i>
</button>
</div>
<div class="modal-body ui-front">
  <section id="multiple-column-form">
    <div class="row match-height">
      <div class="col-12">
        <div class="card">

          <div class="card-content">
                {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}} </li>
                        @endforeach
                    </ul>
                </div>
                @endif --}}
                <div class="card-body">
                  {!! Form::open(['route'=>'danquan.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                  <div class="row">
                    <div class="col-sm-4"><img src="{{asset('public/backend/images/faces/2.jpg')}}" width="100px" height="100px" alt="...">

                    </div>
                    <div class="col-sm-4">
                        <button id="qrtest" class="btn btn-info"><i class="fa fa-qrcode" aria-hidden="true"></i></span> QR code</button>
                        {{-- chụp --}}
{{--                         <div id="my_camera"></div>
                        <br/>
                        <input type=button value="Chụp hình" onClick="take_snapshot()">
                        <input type="hidden" name="anh34" class="image-tag">
                        <br/>
                        <div id="results">Ảnh chụp ở đây</div> --}}

                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div id="reader"></div>

                            {!! Form::label('CopyCode', 'Copy dòng code', []) !!}
                            <div id="result"></div>
                        </div>
                    </div>

                    <div class="col-12">
                     <div class="form-group">
                       {!! Form::label('Image', 'Thêm ảnh', []) !!}
                       {!! Form::file('anh34', ['class'=>'form-control','id'=>'formFile' ]) !!}
                   </div>
               </div>
               <div class="col-12">
                <div class="divider">
                  <div class="divider-text">Hồ sơ dân quân tự vệ</div>
              </div>
          </div>

          <div class="col-sm-2">
           <div class="form-group">
             {!! Form::label('tenkhaisinh', 'Tên khai sinh', []) !!}
             {!! Form::text('tenkhaisinh',null, ['class'=>'form-control','placeholder'=>'Nhập tên khai sinh','id'=>'tenkhaisinh','required']) !!}
         </div>
     </div>
     <div class="col-sm-2">
       <div class="form-group">
         {!! Form::label('tenkhac', 'Tên khác', []) !!}
         {!! Form::text('tenkhac',null, ['class'=>'form-control','placeholder'=>'Nhập tên khác','id'=>'tenkhac']) !!}

     </div>
 </div>
 <div class="col-sm-2">
   <div class="form-group">
     {!! Form::label('sdt', 'Số điện thoại', []) !!}
     {!! Form::text('sdt',null, ['class'=>'form-control','placeholder'=>'Nhập số điện thoại','id'=>'sdt']) !!}
     <p class="text-danger">{{ $errors->first('sdt') }}</p>
 </div>
</div>
<div class="col-sm-2">
   <div class="form-group">
     {!! Form::label('gioitinh', 'Giới tính', []) !!}
     {!! Form::select('gioitinh', ['1'=>'Nam','0'=>'Nữ'],null, ['class'=>'form-control']) !!}
 </div>
</div>
<div class="col-sm-2">
   <div class="form-group">

    {!! Form::label('namsinh', 'Năm sinh ' ) !!}

    {!! Form::text('namsinh', null, ['class' => 'form-control','placeholder'=>'dd/mm/yy','id'=>
    'namsinh','required']) !!}
    <p class="text-danger">{{ $errors->first('namsinh') }}</p>
</div>
</div>


<div class="col-sm-2">
 <div class="form-group">
   {!! Form::label('thanhphan_id', 'Thành phần', []) !!}

   {!! Form::select('thanhphan_id', $thanhphan,null, ['class'=>'form-control']) !!}
</div>
</div>
<div class="col-sm-2">
 <div class="form-group">
   {!! Form::label('cancuoc', 'CMND / CCCD', []) !!}
   {!! Form::text('cancuoc',null, ['class'=>'form-control','placeholder'=>'Nhập số căn cước','id'=>'cancuoc']) !!}
</div>
</div>
<div class="col-sm-2">
 <div class="form-group">

  {!! Form::label('congancapngay', 'Cấp ngày ' ) !!}

  {!! Form::text('congancapngay', null, ['class' => 'form-control','placeholder'=>'dd/mm/yy','id'=>
  'congancapngay','required']) !!}
  <p class="text-danger">{{ $errors->first('congancapngay') }}</p>
</div>
</div>

<div class="col-sm-2">
   <div class="form-group">
     {!! Form::label('dantoc', 'Dân tộc', []) !!}
     {!! Form::text('dantoc','Kinh', ['class'=>'form-control','placeholder'=>'Dân tộc','id'=>'dantoc']) !!}
 </div>
</div>
<div class="col-sm-2">
   <div class="form-group">
     {!! Form::label('tongiao', 'Tôn giáo', []) !!}
     {!! Form::text('tongiao','Không', ['class'=>'form-control','id'=>'tongiao']) !!}
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
     {!! Form::select('thanhphangiadinh', ['Kinh doanh','Buôn bán','Nội trợ','Công nhân'],'Kinh doanh', ['class'=>'form-control']) !!}
 </div>
</div>
<div class="col-sm-2">
   <div class="form-group">
     {!! Form::label('banthan', 'Bản thân', []) !!}
     {!! Form::text('banthan','Phụ thuộc', ['class'=>'form-control','id'=>'banthan']) !!}
 </div>
</div>
<div class="col-sm-2 ">
   <div class="form-group">
     {!! Form::label('vanhoa', 'Văn hoá', []) !!}
     {!! Form::text('vanhoa',null, ['class'=>'form-control','id'=>'vanhoa','placeholder'=>'9/12']) !!}
 </div>
</div>
<div class="col-sm-2 ">
   <div class="form-group">
     {!! Form::label('vaonam', 'Năm tham gia DQTV', []) !!}
     {!! Form::text('vaonam', null, ['class' => 'form-control','placeholder'=>'dd/mm/yy','id'=>
     'namsinh','required']) !!}
     <p class="text-danger">{{ $errors->first('vaonam') }}</p>
 </div>

</div>
<div class="col-sm-2 ">
   <div class="form-group">
     {!! Form::label('ranam', 'Năm hoàn thành DQTV', []) !!}
     {!! Form::text('ranam', null, ['class' => 'form-control','id'=>
     'ranam','disabled']) !!}

 </div>
</div>
<div class="col-sm-4 ">
   <div class="form-group">
     {!! Form::label('bienche', 'Biên chế', []) !!}
     {!! Form::select('bienche', ['1'=>'Đã biên chế','0'=>'Chưa biên chế'],null, ['class'=>'form-control']) !!}

 </div>
</div>
{{-- <div class="w-100"></div> --}}

<div class="col-sm-3 ">
   <div class="form-group">
    {!! Form::label('tinhtrangcha', 'Sống / Mất', []) !!}
    <select name="tinhtrangcha" id="tinhtrangcha" class ="form-control">
     <option value="Sống">Sống</option>
     <option value="Mất">Mất</option>
 </select>
</div>
</div>
<div class="col-sm-3">
 <div class="form-group">
   {!! Form::label('tencha', 'Tên cha', []) !!}
   {!! Form::text('tencha',null, ['class'=>'form-control','id'=>'tencha']) !!}
</div>
</div>
<div class="col-sm-3">
 <div class="form-group">
   {!! Form::label('namsinhcha', 'Năm sinh cha', []) !!}
   {!! Form::text('namsinhcha',null, ['class'=>'form-control','id'=>'namsinhcha']) !!}
</div>
</div>
<div class="col-sm-3">
 <div class="form-group">
   {!! Form::label('nghenghiepcha', 'Nghề nghiệp cha', []) !!}
   {!! Form::text('nghenghiepcha',null, ['class'=>'form-control','id'=>'nghenghiepcha']) !!}
</div>
</div>

<div class="col-sm-3 ">
 <div class="form-group">
  {!! Form::label('tinhtrangme', 'Sống / Mất', []) !!}
  <select name="tinhtrangme" id="tinhtrangcha" class ="form-control">
   <option value="Sống">Sống</option>
   <option value="Mất">Mất</option>
</select>
</div>
</div>
<div class="col-sm-3">
   <div class="form-group">
     {!! Form::label('tenme', 'Tên mẹ', []) !!}
     {!! Form::text('tenme',null, ['class'=>'form-control','id'=>'tenme']) !!}
 </div>
</div>
<div class="col-sm-3">
   <div class="form-group">
     {!! Form::label('namsinhme', 'Năm sinh mẹ', []) !!}
     {!! Form::text('namsinhme',null, ['class'=>'form-control','id'=>'namsinhme']) !!}
 </div>
</div>
<div class="col-sm-3">
   <div class="form-group">
     {!! Form::label('nghenghiepme', 'Nghề nghiệp mẹ', []) !!}
     {!! Form::text('nghenghiepme',null, ['class'=>'form-control','id'=>'nghenghiepme']) !!}
 </div>
</div>
<div class="col-sm-3">
   <div class="form-group">
     {!! Form::label('socon', 'Cha mẹ có', []) !!}
     {!! Form::select('socon', ['0','1','2','3','4','5'],null, ['class'=>'form-control']) !!}
 </div>
</div>
<div class="col-sm-3">
   <div class="form-group">
    {!! Form::label('contrai', 'Con trai', []) !!}
    {!! Form::select('contrai', ['0','1','2','3','4','5'],null, ['class'=>'form-control']) !!}
</div>
</div>
<div class="col-sm-3">
 <div class="form-group">
  {!! Form::label('congai', 'Con gái', []) !!}
  {!! Form::select('congai', ['0','1','2','3','4','5'],null, ['class'=>'form-control']) !!}
</div>
</div>
<div class="col-sm-3">
   <div class="form-group">
    {!! Form::label('banthanla', 'Bản thân là con thứ', []) !!}
    {!! Form::select('banthanla', ['Một','Hai','Ba','Bốn','Năm'],null, ['class'=>'form-control']) !!}
</div>
</div>
<div class="col-sm-6">
 <div class="form-group">
   {!! Form::label('noidkks', 'Nơi đăng ký khai sinh', []) !!}
   {!! Form::text('noidkks','phường Bình An, thành phố Dĩ An, tỉnh Bình Dương', ['class'=>'form-control','id'=>'noidkks']) !!}
</div>
</div>
<div class="col-sm-6">
 <div class="form-group">
  {!! Form::label('quequan', 'Quê quán', []) !!}
  {!! Form::text('quequan','phường Bình An, thành phố Dĩ An, tỉnh Bình Dương', ['class'=>'form-control','id'=>'quequan']) !!}
</div>
</div>
<div class="col-sm-6">
   <div class="form-group">
    {!! Form::label('thuongtru', 'Thường trú', []) !!}
    {!! Form::text('thuongtru','phường Bình An, thành phố Dĩ An, tỉnh Bình Dương', ['class'=>'form-control','id'=>'thuongtru']) !!}
</div>
</div>
<div class="col-sm-6">
 <div class="form-group">
  {!! Form::label('noio', 'Nơi ở', []) !!}
  {!! Form::text('noio','phường Bình An, thành phố Dĩ An, tỉnh Bình Dương', ['class'=>'form-control','id'=>'noio']) !!}
</div>
</div>



<div class="col-sm-6">
   <div class="form-group">
     {!! Form::label('tinhhinhgiadinhcha', 'TÌNH HÌNH KINH TẾ, CHÍNH TRỊ CỦA GIA ĐÌNH (Cha)', []) !!}
     {!! Form::textarea('tinhhinhgiadinhcha',null, ['class'=>'form-control','id'=>'tinhhinhgiadinhcha']) !!}
 </div>
</div>
<div class="col-sm-6">
   <div class="form-group">
     {!! Form::label('tinhhinhgiadinhme', 'TÌNH HÌNH KINH TẾ, CHÍNH TRỊ CỦA GIA ĐÌNH (MẸ)', []) !!}
     {!! Form::textarea('tinhhinhgiadinhme',null, ['class'=>'form-control','id'=>'tinhhinhgiadinhme']) !!}
 </div>
</div>
<div class="col-sm-6">
   <div class="form-group">
     {!! Form::label('tinhhinhgiadinh', 'TÌNH HÌNH KINH TẾ, CHÍNH TRỊ CỦA GIA ĐÌNH ( Anh, Chị, Em )', []) !!}
     {!! Form::textarea('tinhhinhgiadinh',null, ['class'=>'form-control','id'=>'tinhhinhgiadinh']) !!}
 </div>
</div>
<div class="col-sm-6">
   <div class="form-group">
     {!! Form::label('tinhhinhbanthan', 'TÌNH HÌNH KINH TẾ,CHÍNH TRỊ, QUÁ TRÌNH CÔNG TÁC CỦA BẢN THÂN ', []) !!}
     {!! Form::textarea('tinhhinhbanthan',null, ['class'=>'form-control','id'=>'tinhhinhbanthan']) !!}
 </div>
</div>




<div class="modal-footer">

  <div class="col-12" align="right">
    {!! Form::submit('Thêm', ['class'=>'btn btn-primary me-1 mb-1']) !!}
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

