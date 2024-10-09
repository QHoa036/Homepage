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
    <!-- Danh sách sản phẩm  -->
    <?php
        $products = [
            ["img" => "assets/imgs/products/product_1.jpg", "title" => "Sách kinh tế vĩ mô", "sold" => "Đã bán: 300", "price" => "60.000"],
            ["img" => "assets/imgs/products/product_1.jpg", "title" => "Sách kinh tế vĩ mô", "sold" => "Đã bán: 300", "price" => "60.000"],
            ["img" => "assets/imgs/products/product_1.jpg", "title" => "Sách kinh tế vĩ mô", "sold" => "Đã bán: 300", "price" => "60.000"],
            ["img" => "assets/imgs/products/product_1.jpg", "title" => "Sách kinh tế vĩ mô", "sold" => "Đã bán: 300", "price" => "60.000"],
            ["img" => "assets/imgs/products/product_1.jpg", "title" => "Sách kinh tế vĩ mô", "sold" => "Đã bán: 300", "price" => "60.000"],
            ["img" => "assets/imgs/products/product_1.jpg", "title" => "Sách kinh tế vĩ mô", "sold" => "Đã bán: 300", "price" => "60.000"],
            ["img" => "assets/imgs/products/product_1.jpg", "title" => "Sách kinh tế vĩ mô", "sold" => "Đã bán: 300", "price" => "60.000"],
            ["img" => "assets/imgs/products/product_1.jpg", "title" => "Sách kinh tế vĩ mô", "sold" => "Đã bán: 300", "price" => "60.000"],
            ["img" => "assets/imgs/products/product_1.jpg", "title" => "Sách kinh tế vĩ mô", "sold" => "Đã bán: 300", "price" => "60.000"]
        ];
    ?>

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
        <div class="bg-title-category">
            <p class="title-category">SẢN PHẨM HOT</p>
        </div>

        <div class="carousel-wrapper" id="wrapper-hot">
            <div class="carousel" id="carousel-hot">
                <div class="carousel-content" id="content-hot">
                    <?php foreach ($products as $product): ?>
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo $product['img']; ?>" class="card-img-top" alt="...">
                            <h5 class="card-title"><?php echo $product['title']; ?></h5>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="card-text"><?php echo $product['sold']; ?></p>
                                <p class="card-price"><?php echo $product['price']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <button class="carousel-prev" id="prev-hot">
                <i class="carousel-icon bi bi-chevron-left"></i>
            </button>
            <button class="carousel-next" id="next-hot">
                <i class="carousel-icon bi bi-chevron-right"></i>
            </button>
        </div>
    </section>

    <!-- Most Sale Sections -->
    <section>
        <div class="bg-title-category">
            <p class="title-category">SẢN PHẨM BÁN CHẠY</p>
        </div>

        <div class="carousel-wrapper" id="wrapper-bestseller">
            <div class="carousel" id="carousel-bestseller">
                <div class="carousel-content" id="content-bestseller">
                    <?php foreach ($products as $product): ?>
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo $product['img']; ?>" class="card-img-top" alt="...">
                            <h5 class="card-title"><?php echo $product['title']; ?></h5>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="card-text"><?php echo $product['sold']; ?></p>
                                <p class="card-price"><?php echo $product['price']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <button class="carousel-prev" id="prev-bestseller">
                <i class="carousel-icon bi bi-chevron-left"></i>
            </button>
            <button class="carousel-next" id="next-bestseller">
                <i class="carousel-icon bi bi-chevron-right"></i>
            </button>
        </div>
    </section>

    <!-- JS -->
    <script src="assets/scripts/homepage.js"></script>
</body>

</html>