<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="https://KiemTien.Pw">
            <!-- <img src="../img/logo.png" alt="logo"> -->
        </a>
        <!-- <a class="navbar-brand brand-logo-mini" href="https://KiemTien.Pw"><img src="../img/logo.png" alt="logo"></a> -->
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center " type="button" data-toggle="minimize" id="nav-toggle" style="outline:none">
            <span class="material-icons">
                menu
            </span>
        </button>

        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="nav-profile-img">
                        <img src="{{asset('img/pic-1.png')}}" alt="image">
                        <span class="availability-status online"></span>
                    </div>
                    <div class="nav-profile-text">
                        <p class="mb-1 text-black">{{$userName}}</p>
                    </div>
                </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="/thong-tin-ca-nhan">
                        <i class="mdi mdi-cached mr-2 text-success"></i> Hồ Sơ</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/tin-nhan">
                        <i class="mdi mdi-facebook-messenger mr-2 text-success"></i> Gửi Tin Nhắn Cho Admin</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('dangxuat')}}">
                        <i class="mdi mdi-logout mr-2 text-primary"></i> Đăng Xuất </a>
                </div>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="/thong-tin-ca-nhan">
                        <i class="mdi mdi-cached mr-2 text-success"></i> Hồ Sơ</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/tin-nhan">
                        <i class="mdi mdi-facebook-messenger mr-2 text-success"></i> Gửi Tin Nhắn Cho Admin</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('dangxuat')}}">
                        <i class="mdi mdi-logout mr-2 text-primary"></i> Đăng Xuất </a>
                </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
                <a class="nav-link">
                    <i class="mdi" id="fullscreen-button"><span class="material-icons">
                            fullscreen
                        </span></i>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                    <i class="mdi"><span class="material-icons">
                            notifications
                        </span></i>
                    <span class="count-symbol bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0">Thông Báo</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item" href="/messenger">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-success">
                                <i class="mdi mdi-calendar"></i>
                            </div>
                        </div>
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject font-weight-normal mb-1">Hướng Dẫn Kích Hoạt Tài Khoản
                            </h6>
                            <p class="text-gray ellipsis mb-0">Sau khi chuyển khoản cho Admin xong bạn vui lòng chụp lại biên lai chuyển khoản và gửi qua Zalo: 0796690975 để Admin duyệt nhanh hơn. Xin cảm ơn! </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item" href="/messenger">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-success">
                                <i class="mdi mdi-calendar"></i>
                            </div>
                        </div>
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject font-weight-normal mb-1">Giới Thiệu Thành Viên Mới</h6>
                            <p class="text-gray ellipsis mb-0">Mỗi lượt giới thiệu TVM đăng ký kích hoạt thành công được cộng 50.000 VNĐ vào tài khoản. TVM không nhập hoặc nhập sai mã Admin không chịu trách nhiệm. Xin cảm ơn! </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item" href="/messenger">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-success">
                                <i class="mdi mdi-calendar"></i>
                            </div>
                        </div>
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject font-weight-normal mb-1">Tạo Thêm Tài Khoản</h6>
                            <p class="text-gray ellipsis mb-0">Mỗi cá nhân chỉ tạo được duy nhất 2 tài khoản. Xin cảm ơn! </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>

                    <h6 class="p-3 mb-0 text-center"><a href="https://KiemTien.Pw/messenger">Xem Tất Cả</a></h6>
                </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
                <a class="nav-link" href="{{route('dangxuat')}}">
                    <i class="mdi"><span class="material-icons">
                            power_settings_new
                        </span></i>
                </a>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>