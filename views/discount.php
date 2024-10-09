<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEH Stationery</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/components/discount.css" />

    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
</head>

<body>
    <!-- Banner Section -->
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

    <!-- Flashsales Section -->
    <section class="flashsale-section">
        <div class="container-fluid bg-flashsale">
            <div class="row">
                <div class="col-md-6 p-0">
                    <div class="d-flex justify-content-center align-items-center mh-100 h-100 position-relative">
                        <div class="bg-flash-countdown position-absolute top-0 start-0 ">
                            <img src="assets/imgs/buttons/btn_flashsale.png" alt="" />
                            <p class="bg-flash-countdown-text">FLASH SALE: <span class="ms-3" id="countdown" /></p>
                        </div>

                        <div class="bg-flash-info shadow-sm border-4">
                            <div class="d-flex justify-content-between align-items-center px-3">
                                <h3 class="title">
                                    Máy Tính Casio FX-580VN X
                                </h3>

                                <div class="discount-badge">
                                    10<span>%</span>
                                </div>
                            </div>

                            <div class="bg-flash-info-body">
                                <p class="content">Mã SP: <strong class="ms-3">SP5</strong></p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="content me-2">Màu sắc: </p>
                                    <?php
                                        $colors = ['Đen', 'Hồng'];
                                        foreach ($colors as $color) {
                                            echo '<span
                                                class="discount-color border-0 px-5 py-2 mx-4 d-flex
                                                align-items-center justify-content-center">'
                                                . htmlspecialchars($color) . '</span>';
                                        }
                                    ?>
                                </div>

                                <p class="content">Đã bán: <strong class="ms-3">500 sp</strong></p>

                                <div class="w-100 d-flex justify-content-end align-items-center px-4">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <del class="text-muted me-2 discount-price">350.000 <u>đ</u></del>
                                        <strong class="text-danger me-2 discount-price">315.000 <u>đ</u></strong>
                                    </div>

                                    <button class="btn btn-success btn-circle">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>

                                <div class="discount-ratings">
                                    <p class="content">Đánh giá: <strong class="ms-3">1 lượt</strong></p>

                                    <div class="discount-stars me-4">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="flashsale-carousel owl-carousel owl-theme">
                        <div class="item pb-3">
                            <img src="assets/imgs/discounts/discount_1.png" alt="">
                        </div>
                        <div class="item pb-3">
                            <img src="assets/imgs/discounts/discount_2.png" alt="">
                        </div>
                        <div class="item pb-3">
                            <img src="assets/imgs/discounts/discount_3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner Discount Section -->
    <section class="banner-discount-section">
        <div class="container-fluid">
            <img src="assets/imgs/banners/bn_discount.png" alt="">
        </div>
    </section>

    <!-- Voucher Section -->
    <section class="banner-voucher-section">
        <div class="bg-title-voucher">
            <p class="title-voucher">SĂN VOUCHER KHUYẾN MÃI</p>
        </div>

        <?php
        $items = ['test', 'test'];
        ?>

        <div class="grid-container">
            <?php foreach ($items as $item): ?>
            <div class="voucher-card shadow-lg">
                <div class="col-4">
                    <img src="https://via.placeholder.com/150x150" alt="10% Off Discount" class="voucher-image">
                </div>

                <div class="col-8">
                    <div class="row h-100 position-relative w-100">
                        <div class="voucher-button position-absolute top-0 end-0">
                            Lưu
                        </div>

                        <div class="voucher-title">Giảm 10%</div>
                        <div class="voucher-details d-flex flex-column">
                            <div class="text">
                                Đơn Tối Thiểu 200.000đ <br />
                                Có hiệu lực từ 30/10/2024 - 9/11/2024
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>
        </div>
    </section>

    <script src="assets/scripts/discount.js"></script>
</body>

</html>