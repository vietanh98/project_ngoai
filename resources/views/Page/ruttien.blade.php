@extends('Page.main')
@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi"> <span class="material-icons" style="transform: translate(0px, 5px);">
                    home
                </span></i>
        </span> KIEMTIENONLINE </h3>
</div>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Hiện tại: 0 VNĐ</h4>
        <h3 class="card-title">Lưu ý: Số tiền tối thiểu để rút là 160.000 VNĐ | Phí 10.000/lượt </h3>
        <script>
            swal("Thông Báo", "Bạn Vui Lòng Cập Nhật Đầy Đủ Thông Tin Mới Được Rút Tiền", "warning");
        </script>
        <form action="" method="POST">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Username" name="username" value="vietanh200" aria-describedby="basic-addon1" readonly="">
                </div>
            </div>
            <div class="form-group">
                <span class="float-left"> Số Tiền Rút </span>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-gradient-primary text-white">$</span>
                    </div>
                    <input type="number" class="form-control" name="sotien" aria-label="Amount (to the nearest dollar)">
                </div>
            </div>

            <div class="form-group">
                <span class="float-left"> Tên Tài Khoản</span>
                <div class="input-group">
                    <input type="text" class="form-control" name="ttk" aria-label="Recipient's username" aria-describedby="basic-addon2" value="" readonly="">
                    <div class="input-group-append">
                        <span class="btn btn-sm btn-facebook">
                            <i class="mdi mdi-bank"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <span class="float-left"> Số Tài Khoản</span>
                <div class="input-group">
                    <input type="text" class="form-control" name="stk" aria-label="Recipient's username" aria-describedby="basic-addon2" value="" readonly="">
                    <div class="input-group-append">
                        <span class="btn btn-sm btn-facebook">
                            <i class="mdi mdi-bank"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <span class="float-left">Tên Ngân Hàng</span>
                <div class="input-group">
                    <input type="text" class="form-control" name="chinhanh" aria-label="Recipient's username" aria-describedby="basic-addon2" value="" readonly="">
                    <div class="input-group-append">
                        <span class="btn btn-sm btn-facebook">
                            <i class="mdi mdi-bank"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-gradient-primary btn-icon-text">
                    <i class="mdi mdi-credit-card-multiple btn-icon-prepend"></i>Rút Tiền </button>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Lịch Sử Rút Tiền</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> Số Tiền </th>
                                <th> Trạng Thái </th>
                                <th> Thời Gian </th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection