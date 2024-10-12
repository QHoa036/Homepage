<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/components/discount.css" />
</head>

<body>
    <!-- Kết nối database -->
    <?php include 'database/conn.php'; ?>

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
        <?php
            // Lấy sản phẩm đang được giảm giá
            $flashsaleResult = mysqli_query($conn, 'SELECT *  FROM sanpham INNER JOIN danhgia ON sanpham.MaSP = danhgia.MaSP WHERE MaKM IS NOT NULL LIMIT 1');
            // Lấy các hàng dưới dạng mảng kết hợp
            $flashsaleData = mysqli_fetch_all($flashsaleResult, MYSQLI_ASSOC);
        ?>

        <div class="container-fluid bg-flashsale">
            <div class="row">
                <div class="col-md-6 p-0">
                    <div class="d-flex justify-content-center align-items-center mh-100 h-100 position-relative">
                        <div class="bg-flash-countdown position-absolute top-0 start-0 ">
                            <img src="assets/imgs/buttons/btn_flashsale.png" alt="" />
                            <p class="bg-flash-countdown-text">FLASH SALE: <span class="ms-3" id="countdown" /></p>
                        </div>

                        <div class="bg-flash-info shadow-sm border-4">
                            <?php foreach ($flashsaleData as $data): ?>
                            <div class="d-flex justify-content-between align-items-center px-3">
                                <h3 class="title">
                                    <?php echo $data['TenSP']; ?>
                                </h3>

                                <div class="discount-badge">
                                    10<span>%</span>
                                </div>
                            </div>

                            <div class="bg-flash-info-body">
                                <p class="content">Mã SP: <strong class="ms-3"><?php echo $data['MaSP']; ?></strong></p>
                                <p class="content">Đã bán: <strong class="ms-3">500 sp</strong></p>

                                <div class="w-100 d-flex justify-content-end align-items-center px-4">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <del class="text-muted me-2 discount-price">3<?php echo $data['Giaban']; ?>
                                            <u>đ</u></del>
                                        <strong class="text-danger me-2 discount-price"><?php echo $data['GiaKM']; ?>
                                            <u>đ</u></strong>
                                    </div>

                                    <button class="btn btn-success btn-circle">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>

                                <div class="discount-ratings">
                                    <p class="content">Đánh giá: <strong class="ms-3">1 lượt</strong></p>

                                    <div class="discount-stars me-4">
                                        <?php
                                        for ($i = 0; $i < $data['DiemDG']; $i++) {
                                        ?>
                                        <i id="<?php echo $data['MaDG']; ?>" class="fas fa-star text-warning"></i>
                                        <?php } ?>

                                        <!--
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                        -->
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
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
        <div class="bg-title-voucher text-center mb-4">
            <p class="title-voucher">SĂN VOUCHER KHUYẾN MÃI</p>
        </div>
        <?php
            // Lấy dữ liệu voucher từ cơ sở dữ liệu
            $discountResult = mysqli_query($conn, 'SELECT * FROM khuyenmai ORDER BY NgayKT ASC');
            $discountLst = mysqli_fetch_all($discountResult, MYSQLI_ASSOC);

            // Danh sách các hình ảnh voucher ngẫu nhiên
            $voucherImages = [
                'assets/imgs/vouchers/voucher_1.png',
                'assets/imgs/vouchers/voucher_2.png',
            ];

            // Định nghĩa màu nền cụ thể cho từng hình ảnh voucher
            $voucherBgColors = [
                'assets/imgs/vouchers/voucher_1.png' => '#FBFF00',
                'assets/imgs/vouchers/voucher_2.png' => '#E6FFFF',
            ];
        ?>
        <div class="grid-container">
            <?php foreach ($discountLst as $data): ?>
            <?php
            // Chọn ngẫu nhiên một hình ảnh từ mảng voucherImages
            $randomImage = $voucherImages[array_rand($voucherImages)];

            // Xác định màu nền cho voucher hiện tại dựa trên hình ảnh đã chọn
            $backgroundColor = $voucherBgColors[$randomImage];
            ?>
            <div class="voucher-card" style="background-color: <?php echo $backgroundColor; ?>;">
                <div class="voucher-image">
                    <img src="<?php echo $randomImage; ?>" alt="Voucher Image" class="voucher-image">
                </div>

                <div class="voucher-details">
                    <div class="voucher-title"><?php echo $data['TenCT']; ?></div>
                    <div class="text"><?php echo $data['DieuKien']; ?></div>
                    <div class="text">Có hiệu lực từ <?php echo $data['NgayBD']; ?> - <?php echo $data['NgayKT']; ?>
                    </div>
                </div>

                <button class="voucher-button">Lưu</button>
            </div>
            <?php endforeach; ?>
        </div>
    </section>


    <script src="assets/scripts/discount.js"></script>
</body>

</html>