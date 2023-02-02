            @extends('layouts.app')
            

            @section('content')
            <script type="text/javascript">

            </script>
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon purple">
                                                <i class="iconly-boldShow"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Tổng DQTV</h6>
                                            <h6 class="font-extrabold mb-0">{{$counttongdq}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon blue">
                                                <i class="iconly-boldProfile"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Thường trực</h6>
                                            <h6 class="font-extrabold mb-0">{{$countdqtt}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <i class="iconly-boldAdd-User"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Cơ động</h6>
                                            <h6 class="font-extrabold mb-0">{{$countdqcd}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon red">
                                                <i class="iconly-boldBookmark"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Khu phố</h6>
                                            <h6 class="font-extrabold mb-0">{{$countdqkp}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Biểu đồ số lượng dân quân tham gia qua các năm</h4>
                                </div>
                                <div class="card-body">
                                    <div id="container" data-order="{{ $chart }}"></div>
                                </div>
                            </div>
                            {{ Html::script('https://code.highcharts.com/highcharts.js') }}
                            {{ Html::script('https://code.highcharts.com/modules/exporting.js') }}
                            {{ Html::script('https://code.highcharts.com/modules/export-data.js') }}
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 col-xl-4">
                            {{-- <div class="card">
                                <div class="card-header">
                                    <h4>Biểu đồ số lượng dân quân tham gia qua các năm</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <svg class="bi text-primary" width="32" height="32" fill="blue"
                                                style="width:10px">
                                                <use
                                                xlink:href="{{asset('public/backend/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill')}}" />
                                            </svg>
                                            <h5 class="mb-0 ms-3">Europe</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0">862</h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-europe"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <svg class="bi text-success" width="32" height="32" fill="blue"
                                            style="width:10px">
                                            <use
                                            xlink:href="{{asset('public/backend/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill')}}" />
                                        </svg>
                                        <h5 class="mb-0 ms-3">America</h5>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h5 class="mb-0">375</h5>
                                </div>
                                <div class="col-12">
                                    <div id="chart-america"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi text-danger" width="32" height="32" fill="blue"
                                        style="width:10px">
                                        <use
                                        xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                    </svg>
                                    <h5 class="mb-0 ms-3">Indonesia</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5 class="mb-0">1025</h5>
                            </div>
                            <div class="col-12">
                                <div id="chart-indonesia"></div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            {{-- <div class="col-12 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Latest Comments</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-lg">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Comment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-3">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-md">
                                                    <img src="{{asset('public/backend/images/faces/5.jpg')}}">
                                                </div>
                                                <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">Congratulations on your graduation!</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-3">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-md">
                                                    <img src="assets/images/faces/2.jpg">
                                                </div>
                                                <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">Wow amazing design! Can you make another
                                                tutorial for
                                            this design?</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="col-12 col-lg-3">
        <div class="card">
            <div class="card-body py-4 px-5">
                <div class="d-flex align-items-center">
                    <div class="avatar avatar-xl">
                        <img src="{{asset('public/backend/images/faces/1.jpg')}}" >
                    </div>
                    <div class="ms-3 name">
                        <h5 class="font-bold">Hello,</h5>
                        <h6 class="text-muted mb-0">{{ Auth::user()->name }}</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Mới truy cập</h4>
            </div>
            <div class="card-content pb-4">
                <?php foreach ($users as $key => $value): ?>
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="{{asset('public/backend/images/faces/4.jpg')}}">
                        </div>

                        <div class="name ms-4">
                            <h5 class="mb-1">{{$value->name}}</h5>

                            <h6 class="text-muted mb-0">
                                @if(Cache::has('user-is-online-' . $value->id))
                                <span class="text-success">Online</span>
                                @else
                                <span class="text-secondary">Offline</span>
                            @endif</h6>
                            <h8 class="mb-1">{{ Carbon\Carbon::parse($value->last_seen)->diffForHumans() }}</h8>
                        </div>


                    </div>
                <?php endforeach ?>
                        <!-- <div class="px-4">
                            <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Start
                            Conversation</button>
                        </div> -->
                    </div>
                </div>
                {{-- <div class="card">
                    <div class="card-header">
                        <h4>Visitors Profile</h4>
                    </div>
                    <div class="card-body">
                        <div id="chart-visitors-profile"></div>
                    </div>
                </div> --}}
            </div>
        </section>








        @endsection
