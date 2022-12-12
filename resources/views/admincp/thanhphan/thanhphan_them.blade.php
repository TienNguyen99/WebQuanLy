@extends('layouts.app')
            @include('sweetalert::alert')

            @section('content')
<section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Quản lý thành phần dân quân</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        {!! Form::open(['route'=>'thanhphan.store','method'=>'POST']) !!}
                                            <div class="row">
                                                <!-- <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        {!! Form::label('title', 'Tiêu đề', []) !!}
                                                        <input type="text" id="first-name-column" class="form-control"
                                                            placeholder="First Name" name="fname-column">
                                                    </div>
                                                </div> -->
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        {!! Form::label('title', 'Tiêu đề', []) !!}
                                                        {!! Form::text('title', null, ['class'=>'form-control','placeholder'=>'Nhập tiêu đề','id'=>'title']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('description', 'Mô tả', []) !!}
                                                        {!! Form::textarea('description', null, ['class'=>'form-control','placeholder'=>'Nhập nội dung mô tả','id'=>'description']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('Hoạt động', 'Hoạt động', []) !!}
                                                        {!! Form::select('status', ['1'=>'Hiển thị','0'=>'Ẩn'], null, ['class'=>'form-control']) !!}
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    {!! Form::submit('Thêm', ['class'=>'btn btn-primary me-1 mb-1']) !!}
                                                    
                                                    <!-- <button type="reset"
                                                        class="btn btn-light-secondary me-1 mb-1">Reset</button> -->
                                                </div>
                                            </div>
                                        {!! Form::close() !!}
                                        
                                            

                                        </div>
                                            
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>




            @endsection