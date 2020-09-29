<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{asset('img/pic-1.png')}}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{$userName}}</span>
                    <span class="text-secondary text-small">{{$email}}</span>
                </div>
                <span class="material-icons text-success nav-profile-badge">
                    book
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/trang-chu">
                <span class="menu-title">Trang Chủ</span>
                <i class="mdi menu-icon"><span class="material-icons">
                        home
                    </span></i>
            </a>
        </li>

        <li class="nav-item">
            @if($active == '1')
            <a class="nav-link" href="/xem-video">
                <span class="menu-title">Xem Video Kiếm Tiền</span>
                <i class="mdi menu-icon"><span class="material-icons">
                        touch_app
                    </span></i>
            </a>
            @endif
            @if($active == '2')
            <a class="nav-link" href="/trang-chu">
                <span class="menu-title">Xem Video Kiếm Tiền</span>
                <i class="mdi menu-icon"><span class="material-icons">
                        touch_app
                    </span></i>
            </a>
            <script>
                swal("Vui lòng kích hoạt tài khoản bằng cách chuyển khoản tới STK: 0651000823172 CTK: NGUYEN TAN TRUONG NH: VIETCOMBANK Số tiền: 175.000 VNĐ. Nội dung chuyển khoản ghi: {{$userName}} . Gửi và chờ Admin duyệt. Xin cảm ơn", "warning");
            </script>
            @endif
        </li>

        <li class="nav-item">
            @if($active == '1')
            <a class="nav-link" href="/ma-gioi-thieu">
                <span class="menu-title">Lấy Mã Giới Thiệu</span>
                <i class="mdi menu-icon"><span class="material-icons">
                        show_chart
                    </span></i>
            </a>
            @endif
            @if($active == '2')
            <a class="nav-link" href="/trang-chu">
                <span class="menu-title">Lấy Mã Giới Thiệu</span>
                <i class="mdi menu-icon"><span class="material-icons">
                        show_chart
                    </span></i>
            </a>
            <!-- <script>
                swal("Thông Báo", "Bạn Vui Lòng Cập Nhật Đầy Đủ Thông Tin Mới Được Rút Tiền", "warning");
            </script> -->
            @endif
        </li>
        <li class="nav-item">
            @if($active == '1')
            <a class="nav-link" href="/luot-da-gioi-thieu">
                <span class="menu-title">Lượt Đã Giới Thiệu</span>
                <i class="mdi menu-icon"><span class="material-icons">
                        connect_without_contact
                    </span></i>
            </a>
            @endif
            @if($active == '2')
            <a class="nav-link" href="/trang-chu">
                <span class="menu-title">Lượt Đã Giới Thiệu</span>
                <i class="mdi menu-icon"><span class="material-icons">
                        connect_without_contact
                    </span></i>
            </a>
            <!-- <script>
                swal("Thông Báo", "Bạn Vui Lòng Cập Nhật Đầy Đủ Thông Tin Mới Được Rút Tiền", "warning");
            </script> -->
            @endif
        </li>
        <li class="nav-item sidebar-actions">
            <span class="nav-link">
                <div class="border-bottom"> </div>
                <a href="/rut-tien" class="btn btn-block btn-lg btn-gradient-primary mt-4">Rút Tiền <i class="mdi  menu-icon"></i> <span class="material-icons" style="transform: translate(10px, 5px);">
                        local_atm
                    </span></a>
            </span>
        </li>
        <li class="nav-item">
            <div class="border-bottom"></div>
            <ul class="gradient-bullet-list mt-4">
                <li>Thời Gian : <br>2020-09-20 16:36:25</li>
            </ul>
        </li>
        <div class="card">
            <div class="card-body">
                <div class="template-demo">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th class="pl-0">Thành Viên Mới</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nguyễn Việt Anh</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </ul>
</nav>