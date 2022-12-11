                <!doctype html>
                <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
                <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">

                    <!-- CSRF Token -->
                    <meta name="csrf-token" content="{{ csrf_token() }}">

                    <title>Trang đăng nhập</title>

                    <!-- Scripts -->
                    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
                    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

                    <!-- script  -->

                    <!-- Fonts -->
                    <link rel="dns-prefetch" href="//fonts.gstatic.com">
                    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

                    <!-- Styles -->
                    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/css/navbar.css')}}">
                </head>
                <body>
                    <div id="app">

                        <!-- navbar start -->
                        <!-- Vertical navbar -->
                        <div class="vertical-nav bg-white" id="sidebar">
                          <div class="py-4 px-3 mb-4 bg-light">
                            <div class="media d-flex align-items-center"><img src="https://bootstrapious.com/i/snippets/sn-v-nav/avatar.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
                              <div class="media-body">
                                <h4 class="m-0">BAN CHỈ HUY QUÂN SỰ</h4>
                                <p class="font-weight-light text-muted mb-0">Phường Bình An</p>
                            </div>
                        </div>
                    </div>

                    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>

                    <ul class="nav flex-column bg-white mb-0">
                        <li class="nav-item">
                          <a href="#" class="nav-link text-dark font-italic bg-light">
                            <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link text-dark font-italic">
                        <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                        About
                    </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-dark font-italic">
                    <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                    Services
                </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-dark font-italic">
                    <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                    Gallery
                </a>
                </li>
                </ul>

                <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Thông tin người dùng</p>

                <ul class="nav flex-column bg-white mb-0">
                    <!-- Authentication Links -->
                    <!-- {{ route('login') }} -->
                    <!-- {{ route('register') }} -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                      <a href="{{ route('login') }}" class="nav-link text-dark font-italic">
                        <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                        Đăng nhập
                    </a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                  <a href="{{ route('register') }}" class="nav-link text-dark font-italic">
                    <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                    Đăng ký 
                </a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link text-dark font-italic dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      Xin chào,   {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Đăng xuất
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                </li>
                @endguest
                </ul>
                </div>
                <!-- End vertical navbar -->


                <!-- Page content holder -->

                <!-- navbar end  -->





                <main>
                <div class="page-content p-5" id="content">
                  <!-- Toggle button -->
                  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Ẩn/Hiện</small></button>
                  @yield('content')

                </div>
                    
                </main>
                </div>
                <script type="text/javascript">
                    $(function() {
                  // Sidebar toggle behavior
                      $('#sidebarCollapse').on('click', function() {
                        $('#sidebar, #content').toggleClass('active');
                    });
                  });

                </script>
                </body>

                </html>
