<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ban chỉ huy quân sự phường Bình An</title>
    <link rel="icon" type="image/x-icon" href="{{asset('public/backend/images/logodqtv.png')}}">

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
    {{-- <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet"> --}}
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    {{-- <script src="{{asset('public/backend/js/html5-qrcode.min.js')}}"></script> --}}
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
                                <i class="bi bi-bar-chart-line-fill"></i>
                                <span>Tổng quan</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-fill "></i>
                                <span>Lực lượng dân quân</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">

                                    <a href="{{route('danquan.index')}}" class="dropdown-item"><span>Tổng dân quân</span></a>
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
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <span>Tăng gia sản xuất</span>
                            </a>
                            <ul class="submenu ">

                                <li class="submenu-item ">
                                    <a href="#" class="dropdown-item"><span>Doanh thu</span></a>
                                </li>

                            </ul>
                        </li>
                        {{-- Tuổi 17 --}}
                        <li class="sidebar-item">
                            <a href="{{route('tuoi17.index')}}" class='sidebar-link'>
                                <i class="bi bi-file-earmark-person"></i>
                                <span>Đăng ký tuổi 17</span>
                            </a>
                            {{-- <ul class="submenu ">
                                <li class="submenu-item ">

                                    <a href="{{route('danquan.index')}}" class="dropdown-item"><span>Tổng số</span></a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{route('thanhphan.create')}}" class="dropdown-item">Thành phần</a>
                                </li>
                            </ul> --}}

                        </li>
                        @endauth


                        <li class="sidebar-title">Tài khoản</li>
                        @guest
                        @if (Route::has('login'))
                        <li class="sidebar-item ">
                            <a href="{{route('login')}}" class='sidebar-link'>
                             <i class="bi bi-door-closed-fill"></i>
                             <span>Đăng nhập</span>
                         </a>
                     </li>
                     @endif

                     @if (Route::has('register'))
                     {{-- <li class="sidebar-item ">
                        <a href="{{route('register')}}" class='sidebar-link'>
                           <i class="bi bi-brush-fill"></i>
                            <span>Đăng ký</span>
                        </a>
                    </li> --}}
                    @endif
                    @else
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-door-open-fill"></i>
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
                        <p>2023 &copy; Ban chỉ huy quân sự phường Bình An</p>
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
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script> --}}
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script src="{{asset('public/backend/vendors/apexcharts/apexcharts.js')}}"></script>
<script src="{{asset('public/backend/js/pages/dashboard.js')}}"></script>


<script src="{{asset('public/backend/js/main.js')}}"></script>
<!-- Script Datatables -->



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


</script>
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
            // select: {
            //     style: 'multi'
            // },
            stateSave: true,

            columnDefs: [
            {
                searchPanes: {
                    show: true
                },
                targets: [1 , 8 , 9 , 10]
            },
            {
                searchPanes: {
                    show: false
                },
                targets: [0,2,3,4,5,6,7,11]
            }
            ]
        });
    })
</script>
<script>


    $(document).ready(function() {
        $('#table2').DataTable({
            dom: 'Plfrtip',
            language:{
                url:'https://cdn.datatables.net/plug-ins/1.13.1/i18n/vi.json'
            },
            // select: {
            //     style: 'multi'
            // },
            stateSave: true,

            columnDefs: [
            {
                searchPanes: {
                    show: true
                },
                targets: [ 1 , 3,4,5 ]
            },
            {
                searchPanes: {
                    show: false
                },
                targets: [0,2]
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

{{-- chart year --}}
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
                text: 'Dân quân tham gia'
            },

            

            xAxis: {
                categories: listOfYear,
            },

            series: [{
                type: 'column',
                name: 'Số lượng',   
                colorByPoint: true,
                data: listOfValue,
                showInLegend: true
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
{{-- dân quân ra --}}
<script>
    $(document).ready(function(){
        var order = $('#containerthang').data('order');
        var listOfValue = [];
        var listOfYear = [];
        order.forEach(function(element){
            listOfYear.push(element.getYear);
            listOfValue.push(element.value);
        });
        console.log(listOfValue);
        var chart = Highcharts.chart('containerthang', {

            title: {
                text: 'Dân quân ra quân'
            },



            xAxis: {
                categories: listOfYear,
            },

            series: [{
                type: 'line',
                name: 'Số lượng',
                colorByPoint: true,
                data: listOfValue,
                showInLegend: true
            }]
        });
    });
</script>
{{-- tuổi 17 --}}
<script type="text/javascript">
    $(document).ready(function(){
    var productBuy = $('#containertuoi17').data('order');
    var chartData = [];
    productBuy.forEach(function(element){
        var ele = {name : element.name, y : parseFloat(element.y) };
        chartData.push(ele);
    });
    console.log(chartData);
    Highcharts.chart('containertuoi17', {
        chart: {
          plotBackgroundColor: null,
          plotBorderWidth: null,
          plotShadow: false,
          type: 'pie'
        },
        title: {
          text: 'Daily order'
        },
        tooltip: {
          pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
          pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
              enabled: false
            },
            showInLegend: true
          }
        },
        series: [{
          name: 'Brands',
          colorByPoint: true,
          data: chartData,
        }]
    });
});
</script>
{{-- end chart --}}
<!-- toastify -->
<script src="{{asset('public/backend/vendors/toastify/toastify.js')}}"></script>
{{-- Hiện lỗi show modal --}}
@if (count($errors) > 0)
<script type="text/javascript">
    $( document ).ready(function() {
     $('#themmodal').modal('show');
 });
</script>
@endif
{{-- Hiện lỗi show modal --}}
<!-- Sweetalert -->
<script src="{{asset('public/backend/js/extensions/sweetalert2.js')}}"></script>
<script src="{{asset('public/backend/vendors/sweetalert2/sweetalert2.all.min.js')}}"></script>
{{-- QR code  --}}
{{-- <script src="{{asset('public/backend/js/html5-qrcode.min.js')}}"></script> --}}
{{-- <script type="text/javascript">
    const suggestions = [
                      "Here comes the suggestions",
                      "I like pizza",
                      "I'm a good programmer"
                    ]

var textarea = document.getElementById('tinhhinhgiadinhcha')

textarea.addEventListener('keyup', (e) => {
  var result = suggestions.filter(el => el.startsWith(textarea.value))
  console.log(result)
})
</script> --}}
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

{{-- chụp --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
<script>
  $( function() {
    var availableTags = [
      "phường Bình An, thành phố Dĩ An, tỉnh Bình Dương.",
      "Tiểu học Bình An",
      "Trung học cơ sở Bình An",
      "Trung học phổ thông Bình An",
      "Dĩ An"

      ];
    function split( val ) {
      return val.split( /,\s*/ );
    }
    function extractLast( term ) {
      return split( term ).pop();
  }

  $( "#tinhhinhbanthan,#tinhhinhgiadinhcha,#tinhhinhgiadinhme,#tinhhinhgiadinh" )
      // don't navigate away from the field on tab when selecting an item
  .on( "keydown", function( event ) {
    if ( event.keyCode === $.ui.keyCode.TAB &&
        $( this ).autocomplete( "instance" ).menu.active ) {
      event.preventDefault();
}
})
  .autocomplete({
    minLength: 0,
    source: function( request, response ) {
          // delegate back to autocomplete, but extract the last term
      response( $.ui.autocomplete.filter(
        availableTags, extractLast( request.term ) ) );
  },
  focus: function() {
          // prevent value inserted on focus
      return false;
  },
  select: function( event, ui ) {
      var terms = split( this.value );
          // remove the current input
      terms.pop();
          // add the selected item
      terms.push( ui.item.value );
          // add placeholder to get the comma-and-space at the end
      terms.push( "" );
      this.value = terms.join( "" );
      return false;
  }
});
} );
</script>

{{-- add / to date --}}
{{-- <script type="text/javascript">
    var dob = document.getElementById("namsinh");
dob.addEventListener("keydown", getAge);
function getAge() {
    dob.value = dob.value.replace(/^(\d\d)(\d)$/g,"$1-$2").replace(/^(\d\d\-\d\d)(\d+)$/g,"$1-$2").replace(/[^\d\-]/g,'');
}
</script> --}}
<script type="text/javascript">
    $(document).ready(function() {
      $("#namsinh, #vaonam, #congancapngay,#ranam").keyup(function(e) {
        if (e.keyCode != 8) {
          if ($(this).val().length == 2) {
            $(this).val($(this).val() + "/");
        } else if ($(this).val().length == 5) {
            $(this).val($(this).val() + "/");
        }
    }
});
  });
</script>
{{-- qr code --}}
<script type="text/javascript">
    $(document).ready(function () {
        $("#qrtest").click(function(){
            var str1 = '074099004776|281203034|Nguyễn Minh Tiến|10081999|Nam|Số Nhà 286/B1, Khu Phố Bình Thung 2, Bình An, TP.Dĩ An, Bình Dương|28062021';
            var str = window.prompt("Vui lòng quét mã QR", str1);
            var result=str.split('|');
            $("#cancuoc").val(result[0]);

            $("#tenkhaisinh").val(result[2]);
            $("#namsinh").val(result[3]);

            $("#thuongtru").val(result[5]);
            $("#noio").val(result[5]);
            $("#congancapngay").val(result[6]);
        })

    });
</script>
{{-- chụp --}}
{{-- <script type="text/javascript">
    Webcam.set({
        width: 490,
        height: 350,
        image_format: 'jpeg',
        jpeg_quality: 90
    });

    Webcam.attach( '#my_camera' );

    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            // var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');

            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script> --}}
{{-- QRcode test --}}
<script type="text/javascript" src="https://unpkg.com/html5-qrcode"></script>
<script type="text/javascript">
    function onScanSuccess(qrCodeMessage) {
        document.getElementById('result').innerHTML = '<span class="result">'+qrCodeMessage+'</span>';
    }
    function onScanError(errorMessage) {

    }
    var html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", { fps: 10,
        qrbox: {width: 250, height: 250},
        formatsToSupport: [ Html5QrcodeSupportedFormats.QR_CODE ] });
    html5QrcodeScanner.render(onScanSuccess, onScanError);
</script>
@include('sweetalert::alert')


</body>

</html>
