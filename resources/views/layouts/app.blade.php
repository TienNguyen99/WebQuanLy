<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ban chỉ huy quân sự phường Bình An</title>



    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andika:ital@1&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: Andika !important;
        }
    </style>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Datetimepicker css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <!-- End Datetimepicker css -->
    <!-- Image Upload -->
    <link rel="stylesheet" href="{{asset('public/backend/vendors/toastify/toastify.css')}}">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <!--  -->
    {{-- toast css --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    {{--  --}}
    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- End Script -->
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('public/backend/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/css/navbar.css')}}">
    <link rel="icon" href="{{asset('public/backend/images/logodqtv.ico')}}" type="image/ico">

    <link rel="stylesheet" href="{{asset('public/backend/vendors/iconly/bold.css')}}">


    <link rel="stylesheet" href="{{asset('public/backend/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/css/app.css')}}">
    <!-- css DataTables -->
    {{-- <link rel="stylesheet" href="{{asset('public/backend/vendors/simple-datatables/style.css')}}"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/sp-2.1.0/sl-1.5.0/datatables.min.css"/>
 





    <!-- End Css Datatables -->
    <!-- sweetalert -->
    <link rel="stylesheet" href="{{asset('public/backend/vendors/sweetalert2/sweetalert2.min.css')}}">
</head>


<body>
    <div id="app">

        <!-- navbar start -->
        
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="{{route('home')}}"><img src="{{asset('public/backend/images/logo/logo.png')}}" width="100%" height="100%" ></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <!-- sidebar menu -->
                <div class="sidebar-menu">
                    <ul class="menu">
                        @auth
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item ">
                            <a href="{{route('home')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Tổng quan</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Lực lượng dân quân</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">

                                    <a href="{{route('danquan.index')}}" class="dropdown-item">Tổng dân quân</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{route('thanhphan.create')}}" class="dropdown-item">Thành phần</a>
                                </li>
                            </ul>

                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Dự bị động viên</span>
                            </a>
                            <ul class="submenu ">
                                {{-- @foreach ($thanhphan as $thanhphan_sidebar)
                                <li class="submenu-item ">
                                    <a href="{{route('dqtt')}}">{{$thanhphan_sidebar->title??null}}</a>
                                </li>
                                @endforeach --}}
                            </ul>
                        </li>
                        @endauth


                        <li class="sidebar-title">Tài khoản</li>
                        @guest
                        @if (Route::has('login'))
                        <li class="sidebar-item ">
                            <a href="{{route('login')}}" class='sidebar-link'>
                                <i class="bi bi-brush"></i>
                                <span>Đăng nhập</span>
                            </a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="sidebar-item ">
                            <a href="{{route('register')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Đăng ký</span>
                            </a>
                        </li>
                        @endif
                        @else
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Xin chào,   {{ Auth::user()->name }}</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                Đăng xuất</a>
                                <!-- form ẩn -->
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>       
                    @endguest 
                </ul>
            </div> 
            <!-- sidebar menu end -->
        </div>
    </div>

    <!-- <button class="sidebar-toggler btn x"><i data-feather="x"></i></button> -->

    <!-- navbar end  -->

    <!-- start main -->
    <main>

        <div style="padding: 2rem;">
            <div class="page-content" id="content">
                <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Ẩn/Hiện</small></button>
                @yield('content')



                
                
                <footer>
                    <div class="footer clearfix mb-0 text-muted" align="right">
                        <div class="float-start">
                            <p>2022 &copy; Ban chỉ huy quân sự phường Bình An</p>
                        </div>
                        <div class="float-end">
                            <p>Được tạo bởi <a
                                href="#">Tiến Nguyễn<span class="text-danger"><i class="bi bi-heart"></i></span></a></p>
                            </div>
                        </div>
                    </footer>
                    <!-- end footer -->
                </div>

            </div>

        </main>
        <!-- end main -->



        <!-- start footer -->

    </div>
    <!-- Scripts -->

    
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>



    <script src="{{asset('public/backend/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('public/backend/js/pages/dashboard.js')}}"></script>


    <script src="{{asset('public/backend/js/main.js')}}"></script>
    <!-- Script Datatables -->
    {{-- <script src="{{asset('public/backend/vendors/simple-datatables/simple-datatables.js')}}"></script> --}}
    {{-- <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> --}}


    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/sp-2.1.0/sl-1.5.0/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.5.0/js/dataTables.select.min.js"></script>
    
    <!-- CKeditor  -->
    <!-- <script src="{{asset('public/backend/vendors/ckeditor/ckeditor.js')}}"></script>
    <script>
        ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
    </script> -->
    <!-- End CKeditor -->
    <!-- Datepicker -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.vi.min.js"></script>
    <script>

        $(document).ready(function(){
      var date_input=$('input[name="namsinh"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        // format: 'dd/mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
        language: 'vi'
    };
    date_input.datepicker(options);
})
</script>

<!-- End Datepicker -->

<script>
   

    $(document).ready(function() {
    $('#table1').DataTable({
        dom: 'Plfrtip',
        language:{
                url:'https://cdn.datatables.net/plug-ins/1.13.1/i18n/vi.json'
            },
            select: {
                style: 'multi'
            },
        columnDefs: [
            {
                searchPanes: {
                    show: true
                },
                targets: [0 , 7 , 8 , 9]
            },
            {
                searchPanes: {
                    show: false
                },
                targets: [2 , 5]
            }
        ]
    });
})
</script>

<!-- End script datatables -->
<!--Script thêm -->
<script type="text/javascript">
    $(function() {
// Sidebar ẩn hiện
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar, #content').toggleClass('active');
        });
    });
</script>

{{-- chart --}}
<script>
    $(document).ready(function(){
        var order = $('#container').data('order');
        var listOfValue = [];
        var listOfYear = [];
        order.forEach(function(element){
            listOfYear.push(element.getYear);
            listOfValue.push(element.value);
        });
        console.log(listOfValue);
        var chart = Highcharts.chart('container', {

            title: {
                text: 'Dân quân'
            },

            

            xAxis: {
                categories: listOfYear,
            },

            series: [{
                type: 'column',
                name: 'Số lượng',   
                colorByPoint: true,
                data: listOfValue,
                showInLegend: false
            }]
        });

        $('#plain').click(function () {
            chart.update({
                chart: {
                    inverted: false,
                    polar: false
                },
                subtitle: {
                    text: 'Plain'
                }
            });
        });

        $('#inverted').click(function () {
            chart.update({
                chart: {
                    inverted: true,
                    polar: false
                },
                subtitle: {
                    text: 'Inverted'
                }
            });
        });

        $('#polar').click(function () {
            chart.update({
                chart: {
                    inverted: false,
                    polar: true
                },
                subtitle: {
                    text: 'Polar'
                }
            });
        });
    });


</script>


{{-- end chart --}}
<!-- toastify -->
<script src="{{asset('public/backend/vendors/toastify/toastify.js')}}"></script>
  @if (count($errors) > 0)
    <script type="text/javascript">
        $( document ).ready(function() {
             $('#themmodal').modal('show');
        });
    </script>
  @endif
<!-- Sweetalert -->
<script src="{{asset('public/backend/js/extensions/sweetalert2.js')}}"></script>
<script src="{{asset('public/backend/vendors/sweetalert2/sweetalert2.all.min.js')}}"></script>
@include('sweetalert::alert')


</body>

</html>
