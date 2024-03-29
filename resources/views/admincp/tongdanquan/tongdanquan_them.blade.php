@extends('layouts.app')


@section('content')


<button type="button" data-bs-toggle="modal" data-bs-target="#themmodal" class="btn btn-success rounded-pill shadow-sm px-4 mb-4" style="float: right;" ><i class="fa fa-plus-square-o mr-2"></i><small class="text-uppercase font-weight-bold">Thêm</small></button>
@include('admincp.tongdanquan.tongdanquan_themmodal')
<section class="section">

    <div class="card">
        <!-- Toggle button -->
        
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Số kết nạp</th>
                        <th>Biên chế</th>
                        <th>Tên</th>
                        {{-- <th>Giới tính</th> --}}
                        <th>Khu phố</th>
                        <th>Số điện thoại</th>
                        <th>Năm sinh</th>
                        <th>Quê quán</th>
                        <th>Ảnh</th>
                        <th>Thành phần</th>
                        {{-- <th>Tháng tham gia DQTV</th> --}}
                        <th>Năm tham gia DQTV</th>
                        <th>Năm hoàn thành DQTV</th>
                        {{-- <th>Số ngày tham gia</th> --}}
                        <th>Tuổi</th>
                        <th>Bật/Tắt Biên chế</th>
                        <th>Chỉnh sửa</th>
                        <th>In PDF</th>
                        <th>In Word</th>
                        <th>Xóa</th>
                        

                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($list as $key => $show_tongdanquan): ?>
                        @php

                        // $years = \Carbon\Carbon::parse($show_tongdanquan->vaonam)->age;
                        // $years = \Carbon\Carbon::parse($show_tongdanquan->vaonam)->diff(\Carbon\Carbon::now())->format('%y');
                        $days = \Carbon\Carbon::parse($show_tongdanquan->vaonam)->diffInDays(\Carbon\Carbon::now());
                        // dd($days);
                        @endphp
                        {{-- Thường trực --}}
                        @if (str_contains($show_tongdanquan->thanhphan['title'], "Dân quân thường trực") )
                       <?php if ( $days + 30 >= 730   ): ?>
                        <tr style="background-color: gray;">
                        <?php else: ?>
                            <tr>
                        <?php endif ?>
                        @else
                        <?php if ( $days + 30 >= 1460   ): ?>
                        <tr style="background-color: #668096;">
                        <?php else: ?>
                            <tr>
                        <?php endif ?>
                        @endif
                        {{-- End --}}


                            <td>{{ \Carbon\Carbon::parse($show_tongdanquan->vaonam)->format('Y')}}{{ \Carbon\Carbon::parse($show_tongdanquan->vaonam)->format('m')}}{{$key}}</td>


                            <?php if ($show_tongdanquan->bienche == 1): ?>
                                <td><p class="text-success">Đã biên chế</p></td>
                            <?php else: ?>
                                <td><p class="text-danger">Chưa biên chế</p></td>
                            <?php endif ?>


                            <td><h5 class="font-weight-bold">{{$show_tongdanquan->tenkhaisinh}}</h5></td>
                            {{-- <?php if ($show_tongdanquan->gioitinh == 1): ?>
                                <td>Nam</td>
                            <?php else: ?>
                                <td>Nữ</td>
                            <?php endif ?> --}}
                            @if (empty($show_tongdanquan->khupho))
                            <td><p class="text-danger">Chưa có thông tin</p></td>
                            @else
                            <td>{{$show_tongdanquan->khupho}}</td>
                            @endif
                            <td>{{$show_tongdanquan->sdt}}</td>
                            <td>{{ \Carbon\Carbon::parse($show_tongdanquan->namsinh)->format('d/m/Y')}}</td>
                            <td>{{$show_tongdanquan->quequan}}</td>
                            @if (empty($show_tongdanquan->anh34))


                            {{-- <td><img src="{{asset('public/backend/images/anhnull.png')}}" width="100px" height="100%" alt="..." class="lazyload"></td> --}}
                            <td><p class="text-danger">Chưa có ảnh</p></td>
                            @else
                            <td><img src="{{asset('public/backend/images/'.$show_tongdanquan->anh34)}}" width="100px" height="100%" alt="..."  class="lazyload"></td>
                            @endif

                            <td>{{$show_tongdanquan->thanhphan['title']}}</td>
                            {{-- <td>{{ \Carbon\Carbon::parse($show_tongdanquan->vaonam)->format('m')}}</td> --}}
                            <td>{{ \Carbon\Carbon::parse($show_tongdanquan->vaonam)->format('Y')}}</td>

                                @if (empty($show_tongdanquan->ranam))
                            <td><p class="text-danger">Chưa hoàn thành</p></td>
                            @else
                            <td>{{ \Carbon\Carbon::parse($show_tongdanquan->ranam)->format('Y')}}</td>
                            @endif

                            {{-- <td>{{$show_tongdanquan->remaining_days}}</td> --}}
                            @php
                            $now = \Carbon\Carbon::now()->format('Y');
                            $dob = \Carbon\Carbon::parse($show_tongdanquan->namsinh)->format('Y');
                            $age = $now - $dob;
                            @endphp
                            {{-- <td>{{ \Carbon\Carbon::parse($show_tongdanquan->namsinh)->age}}</td> --}}
                            <td>{{$age}}</td>
                            <td><input data-id="{{$show_tongdanquan->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Biên chế" data-off="Chưa" {{$show_tongdanquan->bienche ? 'checked' :''}}></td>
                            <td>
                             <button type="button" data-bs-toggle="modal"
                             data-bs-target="#danquanmodal{{$show_tongdanquan->id}}" class="btn btn-default" >
                             <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>

                         </button>

                     </td>

                     <td>
                      <a href="{{route('danquan.edit',$show_tongdanquan->id)}}" class="btn btn-default"><i class="fa fa-print fa-2x" aria-hidden="true"></i></a>
                  </td>
                  <td>
                      <a href="{{route('word',$show_tongdanquan->id)}}" class="btn btn-default"><i class="fa fa-file-word-o fa-2x" aria-hidden="true"></i></a>
                  </td>
                  <td>
                    {!! Form::open(['method'=>'DELETE','route' => ['danquan.destroy',$show_tongdanquan->id],'onsubmit'=>'return submitForm(this)']) !!}

                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
                    </button>
                    {!! Form::close() !!}
                    <script type="text/javascript">
                        function submitForm(form){
                            Swal.fire({
                                title: 'Bạn có chắc muốn xóa?',
                                  // text: "You won't be able to revert this!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Chắc chắn'
                            }).then((result) => {
                              if (result.isConfirmed) {
                                form.submit();
                            }
                        });
                            return false;
                        }
                    </script>
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
