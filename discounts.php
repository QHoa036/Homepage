<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEH Stationery</title>

    <!-- get jQuery from the google apis or use your own -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Assets for star ratings -->
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/js/star-rating.min.js"
        type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/css/star-rating.min.css" media="all"
        rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.js"></script>
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.css"
        media="all" rel="stylesheet" type="text/css" />

    <!-- Libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="carousel/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="carousel/owlcarousel/assets/owl.theme.default.min.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/layouts/header.css" />
    <link rel="stylesheet" href="css/layouts/footer.css" />

    <!-- JS -->
    <script src="carousel/vendors/jquery.min.js"></script>
    <script src="carousel/owlcarousel/owl.carousel.js"></script>

    <link rel="stylesheet" href="css/discount.css" />
</head>

<body>
    <!-- Kết nối database -->
    <?php include 'database/conn.php'; ?>

    <!-- Header -->
    <?php include 'layouts/header.php'; ?>

    <div class="outlet">
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
            // Fetch flash sale products
            $flashsaleResult = mysqli_query($conn, 'SELECT * FROM sanpham INNER JOIN khuyenmai ON khuyenmai.MaKM = sanpham.MaKM WHERE sanpham.MaKM IS NOT NULL');
            $flashsaleData = mysqli_fetch_all($flashsaleResult, MYSQLI_ASSOC);
            ?>

            <div class="flashsale-carousel owl-carousel owl-theme">
                <?php foreach ($flashsaleData as $data): ?>
                    <div class="container-fluid bg-flashsale" data-endtime="<?php echo $data['NgayKT']; ?>">
                        <div class="row">
                            <div class="col-md-6 p-0">
                                <div class="d-flex justify-content-center align-items-center mh-100 h-100 position-relative">
                                    <div class="bg-flash-countdown position-absolute top-0 start-0 ">
                                        <img src="assets/imgs/buttons/btn_flashsale.png" alt="" style="height: 70px; width: 50px"></img>
                                        <p class="bg-flash-countdown-text">FLASH SALE: <span id="flashsale-countdown"></span></p>
                                    </div>

                                    <div class="bg-flash-info shadow-sm border-4">
                                        <div class="d-flex justify-content-between align-items-center px-3">
                                            <h3 class="title"><?php echo $data['TenSP']; ?></h3>
                                            <div class="discount-badge"><?php echo $data['PhamtramKM']; ?><span>%</span></div>
                                        </div>

                                        <div class="bg-flash-info-body">
                                            <p class="content">Mã SP: <strong class="ms-3"><?php echo $data['MaSP']; ?></strong></p>
                                            <p class="content">Đã bán: <strong class="ms-3">500 sp</strong></p>

                                            <div class="w-100 d-flex justify-content-end align-items-center px-4">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <del class="text-muted me-2 discount-price">3<?php echo $data['Giaban']; ?><u>đ</u></del>
                                                    <strong class="text-danger me-2 discount-price"><?php echo $data['GiaKM']; ?><u>đ</u></strong>
                                                </div>

                                                <button class="btn btn-success btn-circle">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>

                                            <div class="discount-ratings">
                                                <?php
                                                $productID = $data['MaSP'];

                                                $countRatingResult = mysqli_query($conn, "SELECT COUNT(DiemDG) AS totalRatings FROM danhgia WHERE MaSP = '$productID'");
                                                $countRatingRow = mysqli_fetch_assoc($countRatingResult);
                                                $totalRatings = $countRatingRow['totalRatings'];

                                                $avgRatingResult = mysqli_query($conn, "SELECT AVG(DiemDG) AS avgRating FROM danhgia WHERE MaSP = '$productID'");
                                                $avgRatingRow = mysqli_fetch_assoc($avgRatingResult);
                                                $averageRating = round($avgRatingRow['avgRating'], 0);
                                                ?>

                                                <p class="content">Đánh giá: <strong class="ms-3"><?= $totalRatings ?> lượt</strong></p>
                                                <div class="discount-stars me-4">
                                                    <div class="ratings d-flex flex-column align-items-center">
                                                        <input value="<?= $averageRating ?>" data-size="sm" class="rating" data-readonly="true" data-show-clear="false" data-show-caption="false">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="item pb-3">
                                    <img src="<?php echo "assets/imgs/products/" . $data['Hinhanh'] ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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
    </div>

    <!-- Footer -->
    <?php include 'layouts/footer.php'; ?>

    <!-- Scripts -->
    <script src="scripts/header.js"></script>
    <script>
        function initCountdown(durationInMinutes, elementId) {
            function startCountdown() {
                // Set the date we're counting down to
                var countDownDate = new Date().getTime() + durationInMinutes * 60 * 1000; // durationInMinutes from now

                // Update the count down every 1 second
                var x = setInterval(function() {

                    // Get today's date and time
                    var now = new Date().getTime();

                    // Find the distance between now and the count down date
                    var distance = countDownDate - now;

                    // Time calculations for hours, minutes and seconds
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    // Display the result in the specified element
                    document.getElementById(elementId).innerHTML = hours + " : " + minutes + " : " + seconds;

                    // If the count down is over, reset the countdown
                    if (distance < 0) {
                        clearInterval(x);
                        startCountdown(); // Restart the countdown
                    }
                }, 1000);
            }

            startCountdown(); // Start the initial countdown
        }

        // Initialize countdown for each flash sale item
        initCountdown(15, 'flashsale-countdown');
    </script>


    <!-- Carousel JS -->
    <script>
        $(document).ready(function() {
            $(".flashsale-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var owl = $('.flashsale-carousel');
            var countdownInterval;

            function initializeCountdown(endTime, countdownElement) {
                clearInterval(countdownInterval);
                countdownInterval = setInterval(function() {
                    var now = new Date().getTime();
                    var distance = new Date(endTime).getTime() - now;

                    if (distance < 0) {
                        clearInterval(countdownInterval);
                        countdownElement.innerHTML = "EXPIRED";
                        return;
                    }

                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    countdownElement.innerHTML = hours + "h " + minutes + "m " + seconds + "s ";
                }, 1000);
            }

            owl.on('changed.owl.carousel', function(event) {
                var currentItem = $(event.target).find('.owl-item').eq(event.item.index).find('.container-fluid');
                var endTime = currentItem.data('endtime');
                var countdownElement = currentItem.find('#flashsale-countdown')[0];
                initializeCountdown(endTime, countdownElement);
            });

            // Initialize countdown for the first item
            var firstItem = owl.find('.owl-item').eq(0).find('.container-fluid');
            var firstEndTime = firstItem.data('endtime');
            var firstCountdownElement = firstItem.find('#flashsale-countdown')[0];
            initializeCountdown(firstEndTime, firstCountdownElement);
        });
    </script>

</body>

</html>