<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEH Stationery</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/components/homepage.css" />
</head>

<body>
    <!-- Kết nối database -->
    <?php include "admincp/conn.php"; ?>

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

    <!-- Hot Products Section -->
    <section>
        <?php
        // Fetch all best-seller products
        $hotTrendResult = mysqli_query($conn, 'SELECT * FROM sanpham WHERE HotTrend = 1 ORDER BY HotTrend ASC');

        // Fetch rows as an associative array
        $hotTrendLst = mysqli_fetch_all($hotTrendResult, MYSQLI_ASSOC);

        // Count the number of best-seller products
        $productCount = count($hotTrendLst);
        ?>

        <div class="bg-title-category">
            <p class="title-category">SẢN PHẨM BÁN CHẠY</p>
        </div>

        <div class="carousel-wrapper" id="wrapper-hot">
            <div class="carousel" id="carousel-hot">
                <div class="carousel-content" id="content-hot">
                    <?php foreach ($hotTrendLst as $data): ?>
                        <div class="card" id="<?= $data['MaSP'] ?>">
                            <div class="card-body">
                                <img src="assets/imgs/products/product_1.jpg" class="card-img-top" alt="...">
                                <h5 class="card-title"><?php echo $data['TenSP']; ?></h5>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="card-old-price"> Đã bán: <?php echo $data['Giagoc']; ?></p>
                                    <p class="card-price"><?php echo $data['Giaban']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php if ($productCount > 5): ?>
                <button class="carousel-prev" id="prev-hot">
                    <i class="carousel-icon bi bi-chevron-left"></i>
                </button>
                <button class="carousel-next" id="next-hot">
                    <i class="carousel-icon bi bi-chevron-right"></i>
                </button>
            <?php endif; ?>
        </div>
    </section>

    <!-- Most Sale Sections -->
    <section>
        <?php
        // Fetch all best-seller products
        $bestSellerResult = mysqli_query($conn, 'SELECT * FROM sanpham WHERE BestSeller = 1 ORDER BY BestSeller ASC');

        // Fetch rows as an associative array
        $bestSellerLst = mysqli_fetch_all($bestSellerResult, MYSQLI_ASSOC);

        // Count the number of best-seller products
        $productCount = count($bestSellerLst);
        ?>

        <div class="bg-title-category">
            <p class="title-category">SẢN PHẨM HOT</p>
        </div>

        <div class="carousel-wrapper" id="wrapper-bestseller">
            <div class="carousel" id="carousel-bestseller">
                <div class="carousel-content" id="content-bestseller">
                    <?php foreach ($bestSellerLst as $data): ?>
                        <div class="card" id="<?= $data['MaSP'] ?>">
                            <div class="card-body">
                                <img src="assets/imgs/products/product_1.jpg" class="card-img-top" alt="...">
                                <h5 class="card-title"><?php echo $data['TenSP']; ?></h5>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="card-old-price"> Đã bán: <?php echo $data['Giagoc']; ?></p>
                                    <p class="card-price"><?php echo $data['Giaban']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php if ($productCount > 5): ?>
                <button class="carousel-prev" id="prev-hot">
                    <i class="carousel-icon bi bi-chevron-left"></i>
                </button>
                <button class="carousel-next" id="next-hot">
                    <i class="carousel-icon bi bi-chevron-right"></i>
                </button>
            <?php endif; ?>
        </div>
    </section>

    <section class="category-section">
        <div class="container-fluid text-center">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-6" id="sach-col">
                    <div class="thumbnail big-thumbnail p-0">
                        <a href="#L1">
                            <!-- Mã loại-->
                            <img src="https://tiki.vn/blog/wp-content/uploads/2023/08/thumb-12.jpg" class="img-fluid" alt="Sách" />
                            <div class="caption">
                                <h2>SÁCH</h2>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-6 col-md-3" id="phukien-but-col">
                    <div class="row">
                        <div class="thumbnail small-thumbnail small-thumbnail-first">
                            <a href="#L5">
                                <img src="https://shop.ueh.edu.vn/ueh-souvenir/wp-content/uploads/2022/05/sp-04-1.png"
                                    class="img-fluid" alt="Phụ kiện" />
                                <div class="caption">
                                    <h2>PHỤ KIỆN</h2>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="thumbnail small-thumbnail small-thumbnail-second">
                            <a href="#L3">
                                <img src="https://soklong.com/wp-content/uploads/2021/12/ce77ccea0aa6bdfecd4c355c3af3b9f5.jpg"
                                    class="img-fluid" alt="Bút" />
                                <div class="caption">
                                    <h2>BÚT</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-3" id="sotay-maytinh-col">
                    <div class="row">
                        <div class="thumbnail small-thumbnail small-thumbnail-third">
                            <a href="#L4">
                                <img src="https://inbaobigiay.vn/wp-content/uploads/2023/12/in-so-tay-6.jpg"
                                    class="img-fluid" alt="Sổ tay" />
                                <div class="caption">
                                    <h2>SỔ TAY</h2>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="thumbnail small-thumbnail small-thumbnail-fourth">
                            <a href="#L2">
                                <img src="https://vanphongphamhl.vn/upload_images/images/2024/01/29/may-tinh-casio-cho-hoc-sinh-cap-3-06.jpg"
                                    class="img-fluid" alt="Máy tính" />
                                <div class="caption">
                                    <h2>MÁY TÍNH</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JS -->
    <script src="assets/scripts/homepage.js"></script>
</body>

</html>