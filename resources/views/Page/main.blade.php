<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trang Kiếm Tiền Online - Thu Nhập Ngày 300K - 500K Mỗi Ngày Dễ Dàng. http://kiemtien.pw</title>
    <meta property="og:url" content="https://kiemtien.pw">
    <meta property="og:type" content="KiemTien.Pw Nhận 200K Miễn Phí - Kiếm Tiền Online 4.0">
    <meta property="og:title" content="KiemTien.Pw Kiếm Tiền Online Uy Tín - An Toàn - Nhanh Chóng - Miễn Phí">
    <meta property="og:description" content="Nhận 200K Miễn Phí KiemTien.Pw Kiếm Tiền Online 4.0. Uy Tín - An Toàn - Nhanh Chóng - Miễn Phí">
    <meta property="og:image" content="https://kiemtien.pw/assets/images/logo1.png">
    <!-- plugins:css -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://connect.facebook.net/vi_VN/sdk.js?hash=eaaa3ac3bbc0e9f6c5e9c3729c56307b&amp;ua=modern_es6" async="" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
      @include("Page.header")
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
           @include("Page.siderbar")
            <!-- partial -->
            <div class="main-panel container-fluid">
                <div class="content-wrapper">
                    @yield("content")
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                   @include("Page.footer")
                    <div id="fb-root" class=" fb_reset">
                        <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                            <div></div>
                        </div>
                    </div>
                    <script async="" defer="" crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&amp;version=v7.0&amp;appId=&amp;autoLogAppEvents=1" nonce="0I5RVhZL"></script>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
      

    </div>
</body>

</html>