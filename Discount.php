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
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Anton" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Asul&display=swap">

    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />

    <link rel="stylesheet" href="assets/css/main/discount.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="carousel/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="carousel/owlcarousel/assets/owl.theme.default.min.css">
    <script src="carousel/vendors/jquery.min.js"></script>
    <script src="carousel/owlcarousel/owl.carousel.js"></script>
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
                                <img src="assets/imgs/banners/fd59cb809b2f5acf38c9bbfc1294ecb6 (1).png" alt="" class="bannerbigger">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/imgs/banners/12a81205fcf140a955c5dcf69e7d1dd9.png" alt="" class="bannerbigger">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/imgs/banners/b2cf1cdd04ca34d949fec0d5c034e482.png" alt="" class="bannerbigger">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="col">
                        <div class="row-6 ">
                            <img src="assets/imgs/banners/b2cf1cdd04ca34d949fec0d5c034e482.png" alt="" class="bannersmaller">
                        </div>
                        <div class="row-6">
                            <img src="assets/imgs/banners/12a81205fcf140a955c5dcf69e7d1dd9.png" alt="" class="bannersmaller">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- đây là phần flashsales -->
    <section class="flashsales">
        <div class="container-fluid bgFlashsales">
            <div class="row">
                <div class="col-md-6">
                    chi tiết
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            responsiveClass: true,
            responsive: {
                0: {
                items: 1,
                },
            }
            })
        })
    </script>
    


</body>

</html>