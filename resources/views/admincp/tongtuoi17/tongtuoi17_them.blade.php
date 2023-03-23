@extends('layouts.app')


@section('content')


<button type="button" data-bs-toggle="modal" data-bs-target="#themmodal" class="btn btn-success rounded-pill shadow-sm px-4 mb-4" style="float: right;" ><i class="fa fa-plus-square-o mr-2"></i><small class="text-uppercase font-weight-bold">Thêm</small></button>
@include('admincp.tongtuoi17.tongtuoi17_themmodal')
<section class="section">

    <div class="card">
        <!-- Toggle button -->

        <div class="card-body">
            <table class="table table-striped" id="table2">
                <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Ngày đăng ký tuổi 17</th>
                        <th>Giới tính</th>
                        <th>Số điện thoại</th>
                        <th>Năm sinh</th>
                        <th>Quê quán</th>
                        <th>Ảnh</th>
                        <th>Chỉnh sửa</th>
                        <th>In PDF</th>
                        <th>In Word</th>
                        <th>Xóa</th>


                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($list as $key => $show_tongtuoi17): ?>



                            <td>{{$show_tongtuoi17->tenkhaisinh}}</td>
                            <td>{{ \Carbon\Carbon::parse($show_tongtuoi17->vaonam)->format('d/m/Y')}}</td>
                            <?php if ($show_tongtuoi17->gioitinh == 1): ?>
                                <td>Nam</td>
                            <?php else: ?>
                                <td>Nữ</td>
                            <?php endif ?>

                            <td>{{$show_tongtuoi17->sdt}}</td>
                            <td>{{ \Carbon\Carbon::parse($show_tongtuoi17->namsinh)->format('d/m/Y')}}</td>
                            <td>{{$show_tongtuoi17->quequan}}</td>
                            <td><img src="{{asset('public/backend/images/'.$show_tongtuoi17->anh34)}}" width="100px" height="100%" alt="..."></td>
                            <td>
                             <button type="button" data-bs-toggle="modal"
                             data-bs-target="#tuoi17modal{{$show_tongtuoi17->id}}" class="btn btn-default" >
                             <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>

                         </button>

                     </td>

                     <td>
                      <a href="{{route('tuoi17.edit',$show_tongtuoi17->id)}}" class="btn btn-default"><i class="fa fa-print fa-2x" aria-hidden="true"></i></a>
                  </td>
                  <td>
                      <a href="{{route('wordtuoi17',$show_tongtuoi17->id)}}" class="btn btn-default"><i class="fa fa-file-word-o fa-2x" aria-hidden="true"></i></a>
                  </td>
                  <td>
                    {!! Form::open(['method'=>'DELETE','route' => ['tuoi17.destroy',$show_tongtuoi17->id],'onsubmit'=>'return submitForm(this)']) !!}

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
            @include('admincp.tongtuoi17.tongtuoi17_modal')
        <?php endforeach ?>


    </tbody>
</table>
</div>
</div>

</section>



@endsection
