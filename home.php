<?php include('header.php'); ?>
    <div class="wrap-page text-center">
        <section class="regular">

            <div class="slider-item home-center">
                <div class="logo"><img src="assets/images/img/logo.png"></div>
                <h2 class="home-title">Chương trình <strong>Tri Ân Khách Hàng</strong></h2>
                <div class="top-item">
                    <div class="home-traitim"><img src="assets/images/img/FCV-home-traitim.png"></div>
                    <div class="fcv-canhamanhkhoe"><img src="assets/images/img/FCV-canhamanhkhoe.png"></div>
                    <p class="content-home">Với mong muốn chia sẻ với khách hàng trong việc chăm sóc bản thân và xây dựng gia đình hạnh phúc, FCV mang đến cho khách hàng cơ hội chăm sóc các thành viên trong gia đình mình một cách chu đáo và thiết thực hơn thông qua chương trình tri ân khách hàng <span class="text-primary">Cả nhà mạnh khoẻ - Gắn kết yêu thương"</span></p>
                </div>
            </div>

            <div class="slider-item ">
                <div class="item_section">
                    <div class="content_section slider-cssk">
                        <h1 class="title-item">Chăm sóc sức khỏe</h1>
                        <div class="image">
                            <img src="assets/images/img/FCV-cssk-img.png" alt="">
                        </div>
                        <p class="text-home-content">Giúp cả gia đình bạn yên tâm sức khỏe mà không phải lo lắng vấn đề tài chính</p>
                        <div class="btn-content-section">
                            <a href="cssk.php" class="btn-section dark home"><span>Tìm hiểu thêm</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item ">
                <div class="item_section ">
                    <div class="content_section slider-gkgd">
                        <h1 class="title-item">Gắn kết gia đình</h1>
                        <div class="image">
                            <img src="assets/images/img/FCV-gkgd-img.png" alt="">
                        </div>
                        <p class="text-home-content">Đồng hành và hỗ trợ bạn có những khoảnh khoắc tuyệt vời bên cạnh những người bạn yêu thương</p>
                        <div class="btn-content-section">
                            <a href="gkgd.php" class="btn-section dark home"><span>Tìm hiểu thêm</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item ">
                <div class="item_section">
                    <div class="content_section slider-dtcc">
                        <h1 class="title-item">Đầu tư con cái</h1>
                        <div class="image">
                            <img src="assets/images/img/FCV-dtcc-img.png" alt="">
                        </div>
                        <p class="text-home-content">Giúp bạn có thể cung cấp cho con cháu mình sự khởi đầu tốt đẹp nhất</p>
                        <div class="btn-content-section">
                            <a href="dtcc.php" class="btn-section dark home"><span>Tìm hiểu thêm</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item ">
                <div class="item_section">
                    <div class="content_section slider-ctcs">
                        <h1 class="title-item">Cải thiện cuộc sống</h1>
                        <div class="image">
                            <img src="assets/images/img/FCV-ctcs-img.png" alt="">
                        </div>
                        <p class="text-home-content">Cùng bạn nâng cao tiện nghi gia đình, thoả sức mua sắm với các phiếu quà tặng có giá trị hấp dẫn</p>
                        <div class="btn-content-section">
                            <a href="ctcs.php" class="btn-section dark home"><span>Tìm hiểu thêm</span></a>
                        </div>
                    </div>
                </div>
            </div>



        </section>
    </div>
    <script type="text/javascript">
        $(document).on('ready', function() {
            $('.regular').on('init', function(event, slick, direction, currentSlide){
                actiDotHome(slick.currentSlide);
            });

            $('.regular').on('afterChange', function(event, slick, currentSlide, nextSlide){
                actiDotHome(currentSlide);
            });

            $(".regular").slick({
                dots: true,
                arrows: false,
                infinite: false
            });

            function actiDotHome(x) {
                if(x == 0){
                    $('.slick-dots').addClass('home-item');
                }else{
                    $('.slick-dots').removeClass('home-item');
                }
            }
        });
    </script>
<?php include('footer.php'); ?>