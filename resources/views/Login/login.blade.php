<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trang Xem YouTube Kiếm tiền - Thu Nhập Ngày 300K - 500K Mỗi Ngày Dễ Dàng. http://kiemtien.pw</title>
    <meta property="og:url" content="https://kiemtien.pw">
    <meta property="og:type" content="KiemTien.Pw Nhận 200K Miễn Phí - Kiếm Tiền Online 4.0">
    <meta property="og:title" content="KiemTien.Pw Kiếm Tiền Online Uy Tín - An Toàn - Nhanh Chóng - Miễn Phí">
    <meta property="og:description" content="Nhận 200K Miễn Phí KiemTien.Pw Kiếm Tiền Online 4.0. Uy Tín - An Toàn - Nhanh Chóng - Miễn Phí">
    <meta property="og:image" content="https://kiemtien.pw/assets/images/logo1.png"> <!-- plugins:css -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style/styleLogin.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('img/pic-1.png')}}">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <!-- <img src="../img/logo.png"> -->
                            </div>
                            <h4>Video Hướng Dẫn</h4>
                            <h6 class="font-weight-light">Tạo Thêm Thu Nhập 300.000 VNĐ - 500.000 VNĐ Mỗi Ngày Bằng Việc
                                Online. Kiếm Tiền - An Toàn - Uy Tín - Hỗ Trợ Trên Điện Thoại Và Máy Tính. Rút Tiền
                                24/24h, Hệ Thống Với 2 Năm Kinh Nghiệm Trong Ngành Marketing, Đội Ngũ Nhân Viên Hỗ Trợ
                                Nhiệt Tình. Chúc Bạn kiếm Thật Nhiều Tiền. Xin Cảm Ơn!</h6>

                            <center> <video width="180" height="130" controls="">
                                    <source src="video.mp4" type="video/mp4">Trình duyệt của bạn không hỗ trợ thẻ
                                    video.</video></center> <br>

                            <h4>Đăng Nhập</h4>

                            <h6 class="font-weight-light"></h6>
                            <form class="pt-3" action="{{route('post.login')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="username" name="name" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Tên Tài Khoản">
                                </div>
                                @if($errors->has('name'))
                                <p class="text-danger w-100" style="transform: translate(0px, -25px);">{{$errors->first('name')}}</p>
                                @endif
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Mật Khẩu">
                                </div>
                                @if($errors->has('password'))
                                <p class="text-danger w-100" style="transform: translate(0px, -25px);">{{$errors->first('password')}}</p>
                                @endif
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Đăng Nhập</button>
                                </div>
                                <div class="show-error col-12 ">
                                    @if (session('status'))
                                    <p class="text-danger"> {{ session('status') }}</p>
                                    @endif
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input"> Nhớ Tôi <i class="input-helper"></i></label>
                                    </div>
                                    <a href="javascript:alert('Vui lòng liên hệ Admin Zalo: 0988459063 ');" class="auth-link text-black">Quên Mật Khẩu?</a>
                                </div>
                                <div class="text-center mt-4 font-weight-light"> Bạn Chưa Có Tài Khoản? <a href="/dang-ky" class="text-primary">Đăng Ký</a>
                                </div>
                            </form>
                        </div>
                        <div class="container-scroller">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Hoạt Động Gần Đây</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Tài Khoản</th>
                                                    <th>Số Tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Demo</td>
                                                    <td><label class="badge badge-danger">1000,000 VNĐ</label></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>