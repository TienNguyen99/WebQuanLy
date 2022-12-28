@extends('layouts.app')


@section('content')

<section class="section">
                    <div class="card">
                        
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Tên</th>
                                        <th>Giới tính</th>
                                        <th>Số điện thoại</th>
                                        <th>Năm sinh</th>
                                        <th>Nơi sinh</th>
                                        <th>Đơn vị</th>
                                        <th>Thành phần</th>
                                        <th>Chức năng</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($list as $key => $show_tongdanquan): ?>
                                    <tr>
                                        <td>{{$show_tongdanquan->tenkhaisinh}}</td>
                                        <?php if ($show_tongdanquan->gioitinh == 1): ?>
                                            <td>Nam</td>
                                        <?php else: ?>
                                            <td>Nữ</td>
                                        <?php endif ?>
                                        
                                        <td>{{$show_tongdanquan->sdt}}</td>
                                        <td>{{ \Carbon\Carbon::parse($show_tongdanquan->namsinh)->format('d/m/y')}}</td>
                                        <td>{{$show_tongdanquan->quequan}}</td>
                                        <td>{{$show_tongdanquan->status}}</td>
                                        <td>
                                            
                                            {!! Form::select('status', ['1'=>'Hiển thị','0'=>'Ẩn'], null, ['class'=>'badge bg-success']) !!}
                                        </td>
                                        <td>
                                        	<button type="button" data-bs-toggle="modal"
                                                data-bs-target="#danquanmodal{{$show_tongdanquan->id}}" class="btn btn-default" >
                    	<i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                    </button>

                                        </td>
                                        
                                    </tr>	
                                    @include('admincp.tongdanquan.tongdanquan_modal')
                                    <?php endforeach ?>
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>



@endsection