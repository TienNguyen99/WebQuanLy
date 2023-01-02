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
                        <th>Tên</th>
                        <th>Giới tính</th>
                        <th>Số điện thoại</th>
                        <th>Năm sinh</th>
                        <th>Quê quán</th>
                        <th>Đơn vị</th>
                        <th>Thành phần</th>
                        <th>Chỉnh sửa</th>
                        <th>Xóa</th>
                        <th>In hồ sơ</th>
                        

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
                            <td>{{$show_tongdanquan->thanhphan_id}}</td>
                            
                            <td>
                             <button type="button" data-bs-toggle="modal"
                             data-bs-target="#danquanmodal{{$show_tongdanquan->id}}" class="btn btn-default" >
                             <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>

                         </button>

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
                  <td>
                      <a href="{{route('danquan.edit',$show_tongdanquan->id)}}" class="btn btn-default"><i class="fa fa-print fa-2x" aria-hidden="true"></i></a>
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