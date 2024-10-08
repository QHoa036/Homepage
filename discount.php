<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEH Stationery</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Baloo" />
    <link href="https://fonts.googleapis.com/css2?family=Reddit+Mono:wght@200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Anton" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Asul&display=swap">

    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />

    <link rel="stylesheet" href="assets/css/components/discount.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link rel="stylesheet" href="carousel/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="carousel/owlcarousel/assets/owl.theme.default.min.css">

    <script src="carousel/vendors/jquery.min.js"></script>
    <script src="carousel/owlcarousel/owl.carousel.js"></script>
</head>
</head>

<body>
    <?php include 'layouts/header.php'; ?>

    <!-- đây là phần của banner -->
    <section class="banner-section">
        <div class="container-fluid bg-banner">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <div id="carouselHotControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/imgs/banners/bn_1.png" alt="" class="big-banner">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/imgs/banners/bn_2.png" alt="" class="big-banner">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/imgs/banners/bn_4.png" alt="" class="big-banner">
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselHotControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carouselHotControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="col-md-5 col-sm-12">
                    <div class="col">
                        <div class="row-6">
                            <img src="assets/imgs/banners/bn_4.png" alt="" class="small-banner">
                        </div>
                        <div class="row-6">
                            <img src="assets/imgs/banners/bn_2.png" alt="" class="small-banner">
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


    <?php include 'layouts/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <?php include 'assets/scripts/discount.js'; ?>
</body>

</html>