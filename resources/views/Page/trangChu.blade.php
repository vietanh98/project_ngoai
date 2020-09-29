@extends("Page.main")
@section("content")
<div class="row" id="proBanner">
    <div class="col-12">

        <span class="d-flex align-items-center purchase-popup">
            <p><img src="https://detoxicnga.com/wp-content/uploads/2017/07/warning.gif" width="45" height="45"> Yêu Cầu Cập Nhật Đầy Đủ Thông Tin Tài Khoản. Xin Cảm Ơn!</p>
            <a href="/thong-tin-ca-nhan" target="_blank" class="btn ml-auto download-button">Cập
                Nhật</a>
            <i class="mdi" id="bannerClose"> <span class="material-icons">
                    close
                </span></i>
        </span>
        <span class="d-flex align-items-center purchase-popup">
            <p><img src="https://detoxicnga.com/wp-content/uploads/2017/07/warning.gif" width="45" height="45"> Xin Chào truongnguyen200 Vui lòng kích hoạt tài khoản bằng cách
                chuyển khoản tới STK: 0651000773455 CTK: HO VAN VIET NH: VIETCOMBANK Số tiền:
                175.000 VNĐ. Nội dung chuyển khoản ghi: <span>{{$userName}}</span> .Gửi và chờ Admin duyệt. Xin
                cảm ơn!</p>


        </span> </div>
</div>
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi"> <span class="material-icons">
                    home
                </span></i>
        </span> KIEMTIEN.PW </h3>

</div>
<div class="row">
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
                <img src="../img/circle.svg" class="card-img-absolute" alt="circle-image">
                <h4 class="font-weight-normal mb-3">Tài Khoản <i class="mdi mdi-24px float-right"><span class="material-icons">
                            attach_money
                        </span></i>
                </h4>
                <h2 class="mb-5"> 0 VNĐ </h2>
            </div>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
                <img src="../img/circle.svg" class="card-img-absolute" alt="circle-image">
                <h4 class="font-weight-normal mb-3">Số Video Đã Xem<i class="mdi mdi-24px float-right"><span class="material-icons">
                            music_video
                        </span></i>
                </h4>
                <h2 class="mb-5">0</h2>
            </div>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
            <div class="card-body">
                <img src="../img/circle.svg" class="card-img-absolute" alt="circle-image">
                <h4 class="font-weight-normal mb-3">Đang Online<i class="mdi mdi-24px float-right"><span class="material-icons">
                            person_outline
                        </span></i>
                </h4>
                <h2 class="mb-5">111 Thành Viên</h2>
            </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-12 grid-margin">
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
                                <td>tranvietanh2311</td>
                                <td><label class="badge badge-danger">935,000 VNĐ</label></td>
                            </tr>
                            <tr>
                                <td>Xuanduc2k1</td>
                                <td><label class="badge badge-danger">90,000 VNĐ</label></td>
                            </tr>
                            <tr>
                                <td>Tuyen Huynh</td>
                                <td><label class="badge badge-danger">90,000 VNĐ</label></td>
                            </tr>
                            <tr>
                                <td>Nguyentram</td>
                                <td><label class="badge badge-danger">90,000 VNĐ</label></td>
                            </tr>
                            <tr>
                                <td>NguyenHuongGiang2003</td>
                                <td><label class="badge badge-danger">90,000 VNĐ</label></td>
                            </tr>
                            <tr>
                                <td>Nguyenquochuy85</td>
                                <td><label class="badge badge-danger">90,000 VNĐ</label></td>
                            </tr>
                            <tr>
                                <td>k2c2001</td>
                                <td><label class="badge badge-danger">90,000 VNĐ</label></td>
                            </tr>
                            <tr>
                                <td>Linhkg96</td>
                                <td><label class="badge badge-danger">90,000 VNĐ</label></td>
                            </tr>
                            <tr>
                                <td>haidinh1280</td>
                                <td><label class="badge badge-danger">80,000 VNĐ</label></td>
                            </tr>
                            <tr>
                                <td>Nguyenanhdung1995</td>
                                <td><label class="badge badge-danger">80,000 VNĐ</label></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <ul class="pagination separated pagination-danger">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="https://KiemTien.Pw/?page=2">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="https://KiemTien.Pw/?page=3">3</a>
                </li>
                <li class="page-item"><a class="page-link" href="https://KiemTien.Pw/?page=4">4</a>
                </li>
                <li class="page-item"><a class="page-link" href="https://KiemTien.Pw/?page=5">5</a>
                </li>
                <li class="page-item active"><span>…</span></li>
                <li class="page-item"><a class="page-link" title="Cuối" href="https://KiemTien.Pw/?page=84">Cuối</a></li>
            </ul>
        </div>
    </div>
</div>
<script> swal("Thông Báo", "Đăng nhập thành công", "success");</script>
@endsection