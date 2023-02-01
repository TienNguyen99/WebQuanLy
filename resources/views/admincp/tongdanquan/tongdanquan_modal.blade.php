        <div class="modal fade text-left w-100" id="danquanmodal{{$show_tongdanquan->id}}" tabindex="-1"
          role="dialog" aria-labelledby="myModalLabel20" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-full"
          role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel20">Chỉnh sửa hồ sơ dân quân</h4>
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
                        {!! Form::open(['route'=>['danquan.update',$show_tongdanquan->id],'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
                        <div class="row">
                          <div class="col-sm-6"><img src="{{asset('public/backend/images/'.$show_tongdanquan->anh34)}}" width="100px" height="100%" alt="...">
                        </div>

                          <div class="col-12">
                           <div class="form-group">
                             {!! Form::label('Image', 'Chỉnh sửa ảnh', []) !!}
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
                           {!! Form::text('tenkhaisinh',isset($show_tongdanquan) ? $show_tongdanquan->tenkhaisinh: '', ['class'=>'form-control','placeholder'=>'Nhập tên khai sinh','id'=>'tenkhaisinh','required']) !!}
                         </div>
                       </div>
                       <div class="col-sm-2">
                         <div class="form-group">
                           {!! Form::label('tenkhac', 'Tên khác', []) !!}
                           {!! Form::text('tenkhac',isset($show_tongdanquan) ? $show_tongdanquan->tenkhac: '', ['class'=>'form-control','placeholder'=>'Nhập tên khác','id'=>'tenkhac']) !!}
                         </div>
                       </div>
                       <div class="col-sm-2">
                         <div class="form-group">
                           {!! Form::label('sdt', 'Số điện thoại', []) !!}
                           {!! Form::text('sdt',isset($show_tongdanquan) ? $show_tongdanquan->sdt: '', ['class'=>'form-control','placeholder'=>'Nhập số điện thoại','id'=>'sdt']) !!}
                         </div>
                       </div>
                       <div class="col-sm-2">
                         <div class="form-group">
                           {!! Form::label('gioitinh', 'Giới tính', []) !!}
                           {!! Form::select('gioitinh', ['1'=>'Nam','0'=>'Nữ'],isset($show_tongdanquan) ? $show_tongdanquan->gioitinh: '', ['class'=>'form-control']) !!}
                         </div>
                       </div>
                       <div class="col-sm-2">
                         <div class="form-group">

                          {!! Form::label('namsinh', 'Năm sinh ' ) !!}

                          {!! Form::text('namsinh', isset($show_tongdanquan) ? Carbon\Carbon::parse($show_tongdanquan->namsinh)->format('d/m/Y'): '', ['class' => 'form-control','placeholder'=>'dd/mm/yy','id'=>
                          'namsinh']) !!}
                        </div>
                      </div>


                      <div class="col-sm-2">
                       <div class="form-group">
                         {!! Form::label('thanhphan_id', 'Thành phần', []) !!}

                         {!! Form::select('thanhphan_id', $thanhphan,isset($show_tongdanquan) ? $show_tongdanquan->thanhphan_id: '', ['class'=>'form-control']) !!}
                       </div>
                     </div>
                     <div class="col-sm-2">
                       <div class="form-group">
                         {!! Form::label('cancuoc', 'CMND / CCCD', []) !!}
                         {!! Form::text('cancuoc',isset($show_tongdanquan) ? $show_tongdanquan->cancuoc: '', ['class'=>'form-control','placeholder'=>'Nhập số căn cước','id'=>'cancuoc']) !!}
                       </div>
                     </div>
                     <div class="col-sm-2">
                       <div class="form-group">

                        {!! Form::label('congancapngay', 'Cấp ngày ' ) !!}

                        {!! Form::text('congancapngay', isset($show_tongdanquan) ? Carbon\Carbon::parse($show_tongdanquan->congancapngay)->format('d/m/Y'): '', ['class' => 'form-control','placeholder'=>'dd/mm/yy','id'=>
                        'congancapngay','required']) !!}
                      </div>
                    </div>

                    <div class="col-sm-2">
                     <div class="form-group">
                       {!! Form::label('dantoc', 'Dân tộc', []) !!}
                       {!! Form::text('dantoc',isset($show_tongdanquan) ? $show_tongdanquan->dantoc: '', ['class'=>'form-control','placeholder'=>'Dân tộc','id'=>'dantoc']) !!}
                     </div>
                   </div>
                   <div class="col-sm-2">
                     <div class="form-group">
                       {!! Form::label('tongiao', 'Tôn giáo', []) !!}
                       {!! Form::text('tongiao',isset($show_tongdanquan) ? $show_tongdanquan->tongiao: '', ['class'=>'form-control','id'=>'tongiao']) !!}
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
                       {!! Form::select('thanhphangiadinh', ['Trung nông','Công nhân'],isset($show_tongdanquan) ? $show_tongdanquan->thanhphangiadinh: '', ['class'=>'form-control']) !!}
                     </div>
                   </div>
                   <div class="col-sm-2">
                     <div class="form-group">
                       {!! Form::label('banthan', 'Bản thân', []) !!}
                       {!! Form::text('banthan',isset($show_tongdanquan) ? $show_tongdanquan->banthan: '', ['class'=>'form-control','id'=>'banthan']) !!}
                     </div>
                   </div>
                   <div class="col-sm-2 ">
                     <div class="form-group">
                       {!! Form::label('vanhoa', 'Văn hoá', []) !!}
                       {!! Form::text('vanhoa',isset($show_tongdanquan) ? $show_tongdanquan->vanhoa: '', ['class'=>'form-control','id'=>'vanhoa']) !!}
                     </div>
                   </div>
                   <div class="col-sm-4 ">
                     <div class="form-group">
                       {!! Form::label('vaonam', 'Năm tham gia DQTV', []) !!}
                       {!! Form::text('vaonam', isset($show_tongdanquan) ? Carbon\Carbon::parse($show_tongdanquan->vaonam)->format('d/m/Y'): '', ['class' => 'form-control','placeholder'=>'dd/mm/yy','id'=>
                        'vaonam','required']) !!}
                     </div>
                   </div>
                   <div class="w-100"></div>

                   <div class="col-sm-3 ">
                     <div class="form-group">
                      {!! Form::label('tinhtrangcha', 'Sống / Mất', []) !!}
                      {!! Form::text('tinhtrangcha',isset($show_tongdanquan) ? $show_tongdanquan->tinhtrangcha: '', ['class'=>'form-control','id'=>'tinhtrangcha']) !!}
                   </div>
                 </div>
                 <div class="col-sm-3">
                   <div class="form-group">
                     {!! Form::label('tencha', 'Tên cha', []) !!}
                     {!! Form::text('tencha',isset($show_tongdanquan) ? $show_tongdanquan->tencha: '', ['class'=>'form-control','id'=>'tencha']) !!}
                   </div>
                 </div>
                 <div class="col-sm-3">
                   <div class="form-group">
                     {!! Form::label('namsinhcha', 'Năm sinh cha', []) !!}
                     {!! Form::text('namsinhcha',isset($show_tongdanquan) ? $show_tongdanquan->namsinhcha: '', ['class'=>'form-control','id'=>'namsinhcha']) !!}
                   </div>
                 </div>
                 <div class="col-sm-3">
                   <div class="form-group">
                     {!! Form::label('nghenghiepcha', 'Nghề nghiệp cha', []) !!}
                     {!! Form::text('nghenghiepcha',isset($show_tongdanquan) ? $show_tongdanquan->nghenghiepcha: '', ['class'=>'form-control','id'=>'nghenghiepcha']) !!}
                   </div>
                 </div>

                 <div class="col-sm-3 ">
                     <div class="form-group">
                      {!! Form::label('tinhtrangme', 'Sống / Mất', []) !!}
                      {!! Form::text('tinhtrangme',isset($show_tongdanquan) ? $show_tongdanquan->tinhtrangme: '', ['class'=>'form-control','id'=>'tinhtrangme']) !!}
                   </div>
                 </div>
                 <div class="col-sm-3">
                   <div class="form-group">
                     {!! Form::label('tenme', 'Tên mẹ', []) !!}
                     {!! Form::text('tenme',isset($show_tongdanquan) ? $show_tongdanquan->tenme: '', ['class'=>'form-control','id'=>'tenme']) !!}
                   </div>
                 </div>
                 <div class="col-sm-3">
                   <div class="form-group">
                     {!! Form::label('namsinhme', 'Năm sinh mẹ', []) !!}
                     {!! Form::text('namsinhme',isset($show_tongdanquan) ? $show_tongdanquan->namsinhme: '', ['class'=>'form-control','id'=>'namsinhme']) !!}
                   </div>
                 </div>
                 <div class="col-sm-3">
                   <div class="form-group">
                     {!! Form::label('nghenghiepme', 'Nghề nghiệp mẹ', []) !!}
                     {!! Form::text('nghenghiepme',isset($show_tongdanquan) ? $show_tongdanquan->nghenghiepme: '', ['class'=>'form-control','id'=>'nghenghiepme']) !!}
                   </div>
                 </div>
               <div class="col-sm-3">
                 <div class="form-group">
                   {!! Form::label('socon', 'Cha mẹ có', []) !!}
                   {!! Form::select('socon', ['0','1','2','3'],isset($show_tongdanquan) ? $show_tongdanquan->socon: '', ['class'=>'form-control']) !!}
                 </div>
               </div>
               <div class="col-sm-3">
                 <div class="form-group">
                  {!! Form::label('contrai', 'Con trai', []) !!}
                  {!! Form::select('contrai', ['0','1','2','3'],isset($show_tongdanquan) ? $show_tongdanquan->contrai: '', ['class'=>'form-control']) !!}
               </div>
             </div>
             <div class="col-sm-3">
               <div class="form-group">
                {!! Form::label('congai', 'Con gái', []) !!}
                {!! Form::select('congai', ['0','1','2','3'],isset($show_tongdanquan) ? $show_tongdanquan->congai: '', ['class'=>'form-control']) !!}
             </div>
           </div>
           <div class="col-sm-3">
             <div class="form-group">
              {!! Form::label('banthanla', 'Bản thân là con thứ', []) !!}
              {!! Form::select('banthanla', ['Một','Hai','Ba'],isset($show_tongdanquan) ? $show_tongdanquan->banthanla: '', ['class'=>'form-control']) !!}
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