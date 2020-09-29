@extends("Page.main")
@section("content")
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
<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Video của chúng tôi</h4>
            <div class="row">
                <div class="col-4">
                    <iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                    </iframe>
                    <h2>video 1</h2>
                </div>
                <div class="col-4">
                    <iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                    </iframe>
                    <h2>video 2</h2>
                </div>
                <div class="col-4">
                    <iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                    </iframe>
                    <h2>video 3</h2>
                </div>
                <div class="col-4">
                    <iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                    </iframe>
                    <h2>video 4</h2>
                </div>
                <div class="col-4">
                    <iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                    </iframe>
                    <h2>video 5</h2>
                </div>
                <div class="col-4">
                    <iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                    </iframe>
                    <h2>video 6</h2>
                </div>
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
@endsection