			@extends('layouts.app')
			

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

									<?php if (!isset($thanhphan)): ?>
										{!! Form::open(['route'=>'thanhphan.store','method'=>'POST']) !!}
									<?php else: ?>
										{!! Form::open(['route'=>['thanhphan.update',$thanhphan->id],'method'=>'PUT']) !!}
									<?php endif ?>
									
									
									
									
									
									
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
				{!! Form::text('title', isset($thanhphan) ? $thanhphan->title: '', ['class'=>'form-control','placeholder'=>'Nhập tiêu đề','id'=>'title','required']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('description', 'Mô tả', []) !!}
				{!! Form::textarea('description', isset($thanhphan) ? $thanhphan->description: '', ['class'=>'form-control','placeholder'=>'Nhập nội dung mô tả','id'=>'description']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('Hoạt động', 'Hoạt động', []) !!}
				{!! Form::select('status', ['1'=>'Hiển thị','0'=>'Không hiển thị'], isset($thanhphan) ? $thanhphan->status: '', ['class'=>'form-control']) !!}
			</div>
		</div>
		<div class="col-12 d-flex justify-content-end">
			
			<?php if (!isset($thanhphan)): ?>
				{!! Form::submit('Thêm', ['class'=>'btn btn-primary me-1 mb-1']) !!}  
			<?php else: ?>
				{!! Form::submit('Chỉnh sửa', ['class'=>'btn btn-primary me-1 mb-1']) !!}  
			<?php endif ?>
			
			
			<!-- <button type="reset"
				class="btn btn-light-secondary me-1 mb-1">Reset</button> -->
			</div>

		</div>
		{!! Form::close() !!}
		<!-- Form đóng -->

	</div>
	<!-- Table -->
	<section class="section">
		<div class="row" id="table-hover-row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Danh sách thành phần dân quân</h4>
					</div>
					<div class="card-content">
						
						<!-- table hover -->
						<div class="table-responsive">
							<table class="table table-hover mb-0">
								<thead>
									<tr>
										
										<th>STT</th>
										<th>TÊN THÀNH PHẦN</th>
										<th>MÔ TẢ</th>
										<th>TÌNH TRẠNG</th>
										<th>CHỨC NĂNG</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($list as $key => $show_thanhphan): ?>
										<tr>
											
											<td>{{$key}}</td>
											<td class="text-bold-500">{{$show_thanhphan->title}}</td>
											<td>{{$show_thanhphan->description}}</td>
											<td>
												<?php if ($show_thanhphan->status): ?>
													Hiển thị
												<?php else: ?>
													Không hiển thị
												<?php endif ?>

											</td>
											<td>
												{!! Form::open(['method'=>'DELETE','route' => ['thanhphan.destroy',$show_thanhphan->id],'onsubmit'=>'return confirm("Xóa?")']) !!}

												{!! Form::submit('Xóa', ['class'=>'btn btn-outline-danger']) !!}
												{!! Form::close() !!}

											</td>
											<td>
												<a href="{{route('thanhphan.edit',$show_thanhphan->id)}}" class="btn btn-outline-warning">Chỉnh sửa</a>
											</td>
										</tr>   	
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Modal popup -->

</div>

</div>
</div>
</div>
</div>
</section>




@endsection