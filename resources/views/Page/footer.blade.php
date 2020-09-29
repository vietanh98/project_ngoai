<style>
    .bar{
        display: none;
    }
</style>
<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020
            KIEMTIENONLINE </span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
            Hỗ Trợ Nạp Và Rút Tiền Zalo: 0988.459.063
        </span>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $('#nav-toggle').click(function(e) {
        e.stopPropagation();
        $(".sidebar").toggleClass('bar');
        $(".content-wrapper").toggleClass('container-fluid')
        
    });
    $('body').click(function(e) {
        if ($('.sidebar').hasClass('bar') && $('.content-wrapper').hasClass('container-fluid')) {
            $(".sidebar").toggleClass('bar');
            $(".content-wrapper").toggleClass('container-fluid')
        }
    })
</script>