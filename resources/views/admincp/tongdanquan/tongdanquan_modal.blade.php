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
                                        {!! Form::open(['route'=>'danquan.store','method'=>'POST','class'=>'form']) !!}
        <div class="row">
        <div class="col-12"><img src="{{asset('public/backend/images/faces/2.jpg')}}" width="100px" height="100%" alt="..."></div>
        <div class="col-sm-2">
           <div class="form-group">
               {!! Form::label('tenkhaisinh', 'Tên khai sinh', []) !!}
               {!! Form::text('tenkhaisinh',null, ['class'=>'form-control','placeholder'=>'Nhập tên khai sinh','id'=>'tenkhaisinh','required']) !!}
           </div>
        </div>
        <div class="col-sm-2">
           <div class="form-group">
               {!! Form::label('tenkhac', 'Tên khác', []) !!}
               {!! Form::text('tenkhac',null, ['class'=>'form-control','placeholder'=>'Nhập tên khác','id'=>'tenkhac','required']) !!}
           </div>
        </div>
        <div class="col-sm-2">
           <div class="form-group">
               {!! Form::label('sdt', 'Số điện thoại', []) !!}
               {!! Form::text('sdt',null, ['class'=>'form-control','placeholder'=>'Nhập số điện thoại','id'=>'sdt','required']) !!}
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
               {!! Form::label('sdt', 'Số điện thoại', []) !!}
               {!! Form::text('sdt',null, ['class'=>'form-control','placeholder'=>'Nhập số điện thoại','id'=>'sdt','required']) !!}
           </div>
        </div>
        <div class="col-sm-2">
           <div class="form-group">
               {!! Form::label('sdt', 'Số điện thoại', []) !!}
               {!! Form::text('sdt',null, ['class'=>'form-control','placeholder'=>'Nhập số điện thoại','id'=>'sdt','required']) !!}
           </div>
        </div>
        

                                                

                                               
                                                <div class=" col-12">
                                                    <div class="form-group">
                                                        <label for="email-id-column">Email</label>
                                                        <input type="email" id="email-id-column" class="form-control"
                                                            name="email-id-column" placeholder="Email">
                                                    </div>
                                                </div>
                                                
                                                <div class="modal-footer">
                                                <div class="col-12" align="right">
                                                    <button type="submit"
                                                        class="btn btn-primary me-1 mb-1">Submit</button>
                                                    <button type="reset"
                                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
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
        
            <!-- <button type="button" class="btn btn-light-secondary"
            data-bs-dismiss="modal">
            <i class="bx bx-x d-block d-sm-none"></i>
            <span class="d-none d-sm-block">Close</span>
        </button>
        <button type="button" class="btn btn-primary ml-1"
        data-bs-dismiss="modal">
        <i class="bx bx-check d-block d-sm-none"></i>
        <span class="d-none d-sm-block">Accept</span>
        </button> -->
        
        </div>
        </div>
        </div>