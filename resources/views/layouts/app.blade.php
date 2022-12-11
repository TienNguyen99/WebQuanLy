        <!doctype html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>Ban chỉ huy quân sự phường Bình An</title>



            <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

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
        </head>


        <body>
            <div id="app" >

                <!-- navbar start -->
                <!-- Vertical navbar -->
                <div id="sidebar" class="active">
                    <div class="sidebar-wrapper active">
                        <div class="sidebar-header">
                            <div class="d-flex justify-content-between">
                                <div class="logo">
                                    <a href="{{route('home')}}"><img src="{{asset('public/backend/images/dqtv.jpg')}}" width="100%" height="100%" class="mr-3 rounded-circle img-thumbnail shadow-sm"></a>
                                </div>
                                <div class="toggler">
                                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-menu">
                            <ul class="menu">
                                @auth
                                <li class="sidebar-title">Menu</li>

                                <li class="sidebar-item active ">
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
                                            <a href="component-alert.html">Dân quân thường trực</a>
                                        </li>
                                        
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
                                        <i class="bi bi-arrow-left-short"></i>
                                        <span>Xin chào,   {{ Auth::user()->name }}</span>
                                    </a>
                                    <ul class="submenu ">
                                        <li class="submenu-item ">
                                            
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            Đăng xuất
                                        </a>
                                        <!-- form ẩn -->
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>

                                </ul>
                            </li>       
                            @endguest 
                        </ul>
                    </li>



                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
    <!-- End vertical navbar -->




    <!-- navbar end  -->





    <main>
        <div style="padding: 2rem;">
            <div class="page-content" id="content">

                @yield('content')

            </div>
        </div>

    </main>



    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2022 &copy; Được làm bởi Tiến Nguyễn</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                    href="http://ahmadsaugi.com">A. Saugi</a></p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Scripts -->

    <script src="{{asset('public/backend/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>



    <script src="{{asset('public/backend/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('public/backend/js/pages/dashboard.js')}}"></script>

    <script src="{{asset('public/backend/js/main.js')}}"></script>
    <script type="text/javascript">
        $(function() {
        // Sidebar toggle behavior
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar, #content').toggleClass('active');
            });
        });

    </script>

    <!-- script  -->
</body>

</html>
