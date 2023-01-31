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
        <div class="modal-body">
          <section id="multiple-column-form">
            <div class="row match-height">
              <div class="col-12">
                <div class="card">

                  <div class="card-content">
                    <div class="card-body">
                      {!! Form::open(['route'=>'danquan.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                      <div class="row">
                        <div class="col-sm-6"><img src="{{asset('public/backend/images/faces/2.jpg')}}" width="100px" height="100%" alt="...">

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
                        'namsinh']) !!}
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
                     {!! Form::select('thanhphangiadinh', ['Trung nông','Công nhân'],'Trung nông', ['class'=>'form-control']) !!}
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
                     {!! Form::text('vanhoa','9/12', ['class'=>'form-control','id'=>'vanhoa']) !!}
                   </div>
                 </div>
                 <div class="col-sm-4 ">
                   <div class="form-group">
                     {!! Form::label('vaonam', 'Năm tham gia DQTV', []) !!}
                     <select name="vaonam" id="" class ="form-control">
                       <option value="2021">2021</option>
                       <option value="2022">2022</option>
                       <option value="2023">2023</option>
                       <option value="2024">2024</option>
                     </select>
                   </div>
                 </div>
                 <div class="w-100"></div>

                 <div class="col-sm-3 ">
                   <div class="form-group">
                    {!! Form::label('tinhtrangcha', 'Sống / Mất', []) !!}
                    <select name="tinhtrangcha" id="tinhtrangcha" class ="form-control">
                     <option value="Sống">Sống</option>
                     <option value="Mất">Chết</option>
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
                   <option value="Mất">Chết</option>
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
                 <select name="socon" id="socon" class ="form-control">
                   <option value="1">1 người con</option>
                   <option value="2">2 người con</option>
                   <option value="3">3 người con</option>
                 </select>
               </div>
             </div>
             <div class="col-sm-3">
               <div class="form-group">
                {!! Form::label('contrai', 'Con trai', []) !!}
                <select name="contrai" id="contrai" class ="form-control">
                 <option value="0">0</option>
                 <option value="1">1</option>
                 <option value="2">2</option>
               </select>
             </div>
           </div>
           <div class="col-sm-3">
             <div class="form-group">
              {!! Form::label('congai', 'Con gái', []) !!}
              <select name="congai" id="congai" class ="form-control">
               <option value="0">0</option>
               <option value="1">1</option>
               <option value="2">2</option>
             </select>
           </div>
         </div>
         <div class="col-sm-3">
           <div class="form-group">
            {!! Form::label('banthanla', 'Bản thân là con thứ', []) !!}
            <select name="banthanla" id="banthanla" class ="form-control">
              <option value="Nhất">Nhất</option>
              <option value="Hai">Hai</option>
              <option value="Ba">Ba</option>
            </select>
          </div>
        </div>
        <div class="col-sm-6">
         <div class="form-group">
           {!! Form::label('noidkks', 'Nơi đăng ký khai sinh', []) !!}
           {!! Form::text('noidkks','Bình An - Dĩ An - Bình Dương', ['class'=>'form-control','id'=>'noidkks']) !!}
         </div>
       </div>
       <div class="col-sm-6">
         <div class="form-group">
          {!! Form::label('quequan', 'Quê quán', []) !!}
          {!! Form::text('quequan','Bình An - Dĩ An - Bình Dương', ['class'=>'form-control','id'=>'quequan']) !!}
        </div>
      </div>
      <div class="col-sm-6">
       <div class="form-group">
        {!! Form::label('thuongtru', 'Thường trú', []) !!}
        {!! Form::text('thuongtru','Bình An - Dĩ An - Bình Dương', ['class'=>'form-control','id'=>'thuongtru']) !!}
      </div>
    </div>
    <div class="col-sm-6">
     <div class="form-group">
      {!! Form::label('noio', 'Nơi ở', []) !!}
      {!! Form::text('noio','Bình An - Dĩ An - Bình Dương', ['class'=>'form-control','id'=>'noio']) !!}
    </div>
  </div>


  <div class="col-sm-6">
   <div class="form-group">
     {!! Form::label('tinhhinhgiadinh', 'TÌNH HÌNH KINH TẾ, CHÍNH TRỊ CỦA GIA ĐÌNH', []) !!}
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