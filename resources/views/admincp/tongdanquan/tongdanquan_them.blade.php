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
                                        <td>{{$show_tongdanquan->gioitinh}}</td>
                                        <td>{{$show_tongdanquan->sdt}}</td>
                                        <td>{{$show_tongdanquan->quequan}}</td>
                                        <td>{{$show_tongdanquan->status}}</td>
                                        <td>
                                            
                                            {!! Form::select('status', ['1'=>'Hiển thị','0'=>'Ẩn'], null, ['class'=>'badge bg-success']) !!}
                                        </td>
                                        <td>
                                        	<button type="button" data-bs-toggle="modal"
                                                data-bs-target="#full-scrn" class="btn btn-default" >
                    	<i class="bi bi-clipboard-check"></i>

                    </button>

                                        </td>
                                        
                                    </tr>	
                                    <?php endforeach ?>
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>



@endsection