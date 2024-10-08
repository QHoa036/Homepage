<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEH Stationery</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/components/discount.css" />
</head>
</head>

<body>
    <!-- đây là phần của banner -->
    <section class="Banner">
        <div class="container-fluid bgBanner">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/imgs/banners/fd59cb809b2f5acf38c9bbfc1294ecb6 (1).png" alt=""
                                    class="bannerbigger">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/imgs/banners/12a81205fcf140a955c5dcf69e7d1dd9.png" alt=""
                                    class="bannerbigger">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/imgs/banners/b2cf1cdd04ca34d949fec0d5c034e482.png" alt=""
                                    class="bannerbigger">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="col-md-5 col-sm-12">
                    <div class="col">
                        <div class="row-6 ">
                            <img src="assets/imgs/banners/b2cf1cdd04ca34d949fec0d5c034e482.png" alt=""
                                class="bannersmaller">
                        </div>
                        <div class="row-6">
                            <img src="assets/imgs/banners/12a81205fcf140a955c5dcf69e7d1dd9.png" alt=""
                                class="bannersmaller">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- đây là phần flashsales -->
    <section class="Flashsales">
        <div class="container-fluid bgFlashsales">
            <div class="row">
                <div class="col-md-6 p-0">
                    <div class="row-2 bgFlashCountdown">
                        <img src="assets/imgs/buttons/btn_flashsale.png" alt="" />
                        <p class="countdown">FLASH SALE: 00 : 40 : 00</p>
                    </div>

                    <div class="row-10">
                        <div class="card bgFlashInfo shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="title">
                                        Máy Tính Casio FX-580VN X
                                    </h3>

                                    <div class="discount-badge position-relative m-0 ">
                                        <span class="badge bg-danger">
                                            10%
                                        </span>
                                    </div>
                                </div>

                                <small class="content">Mã SP: SP5</small>

                                <div class="colorInfo">
                                    <div class="d-flex align-items-center">
                                        <small class="content">Màu sắc: </small>

                                        <span class="discount-color text-dark border-0 px-5 py-2 mx-4">Đen</span>
                                        <span class="discount-color text-dark border-0 px-5 py-2">Hồng</span>
                                    </div>
                                </div>

                                <p class="priceInfo">Đã bán: <strong>500 sp</strong></p>

                                <div class="d-flex justify-content-end align-items-center mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <del class="text-muted me-2 price">350.000 đ</del>
                                        <strong class="text-danger me-2 price">315.000 đ</strong>
                                    </div>
                                    <button class="btn btn-success btn-circle">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>

                                <div class="ratings">
                                    <span>Đánh giá: 1 lượt</span>
                                    <div class="stars">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-muted"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="assets/imgs/products/máy tinh 1.png" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/imgs/products/máy tính 2.png" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/imgs/products/máy tính 3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- đây là phần banner discount -->
    <section class="BannerDiscount ">
        <div class="container-fluid imgBannerDiscount">
            <img src="assets/imgs/banners/discount.png" alt="" class="imgBannerDiscount">
        </div>
    </section>

    <!-- đây là phần săn voucher -->
    <section class="voucher">
        <div class="bgTitlevoucher">
            <p class="titlevoucher">SĂN VOUCHER KHUYẾN MÃI</p>
        </div>
        <div class="container cardVoucher">
            khuyễn mãi
        </div>
        <div class="container cardVoucher">
            khuyễn mãi
        </div>
    </section>

    <!-- JS -->
    <?php include 'assets/scripts/discount.js'; ?>
</body>

</html>