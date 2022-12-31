        
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
                                {!! Form::open(['route'=>['danquan.update',$show_tongdanquan->id],'method'=>'PUT']) !!}
                                <div class="row">
                                    <div class="col-12"><img src="{{asset('public/backend/images/faces/2.jpg')}}" width="100px" height="100%" alt="...">

                                    </div>

                                    <div class="col-12">
                                        <div class="divider">
                                            <div class="divider-text">Hồ sơ dân quân tự vệ</div>
                                        </div>
                                        <input type="file" class="image-resize-filepond">
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
                                     {!! Form::select('thanhphan_id', $thanhphan,isset($show_tongdanquan) ? $show_tongdanquan->gioitinh: '', ['class'=>'form-control']) !!}
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
                                     {!! Form::label('noidkks', 'Nơi đăng ký khai sinh', []) !!}
                                     {!! Form::text('noidkks',null, ['class'=>'form-control','placeholder'=>'Nơi ĐKKS','id'=>'noidkks']) !!}
                                 </div>
                             </div>
                             <div class="col-sm-2">
                                 <div class="form-group">
                                     {!! Form::label('quequan', 'Quê quán', []) !!}
                                     {!! Form::text('quequan',null, ['class'=>'form-control','placeholder'=>'Nhập quê quán','id'=>'quequan']) !!}
                                 </div>
                             </div>
                             <div class="col-sm-2">
                                 <div class="form-group">
                                     {!! Form::label('dantoc', 'Dân tộc', []) !!}
                                     {!! Form::text('dantoc',null, ['class'=>'form-control','placeholder'=>'Dân tộc','id'=>'dantoc']) !!}
                                 </div>
                             </div>
                             <div class="col-sm-2">
                                 <div class="form-group">
                                     {!! Form::label('tongiao', 'Tôn giáo', []) !!}
                                     {!! Form::text('tongiao','Không', ['class'=>'form-control','id'=>'tongiao']) !!}
                                 </div>
                             </div>
                             <div class="col-sm-6">
                                 <div class="form-group">
                                     {!! Form::label('thuongtru', 'Thường trú', []) !!}
                                     {!! Form::textarea('thuongtru',null, ['class'=>'form-control','id'=>'thuongtru']) !!}
                                 </div>
                             </div>
                             <div class="col-sm-6">
                                 <div class="form-group">
                                     {!! Form::label('noio', 'Nơi ở ', []) !!}
                                     {!! Form::textarea('noio',null, ['class'=>'form-control','id'=>'noio']) !!}
                                 </div>
                             </div>
                             <div class=" col-12">
                                <div class="form-group">
                                    {!! Form::label('mota', 'Mô tả', []) !!}
                                    <div id="editor">

                                    </div>
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