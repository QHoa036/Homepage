<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEH Stationery</title>

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Anton">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Anton+SC&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Asul&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Reddit+Mono:wght@200..900&display=swap">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />

    <!-- JS -->
    <script src="carousel/vendors/jquery.min.js"></script>
    <script src="carousel/owlcarousel/owl.carousel.js"></script>
</head>

<body>
    <?php include 'layouts/header.php'; ?>

    <div class="outlet">
        <?php
            // Lấy tham số URL, loại bỏ dấu gạch chéo ở cuối và chuẩn hóa request URI
            $requestedUri = '/' . trim(isset($_GET['url']) ? $_GET['url'] : '', '/');

            // Định nghĩa các route và các file tương ứng của chúng
            $routes = [
                '/' => 'views/homepage.php',
                '/discount' => 'views/discount.php',
            ];

            // Hàm để xử lý request và bao gồm file tương ứng
            function route($uri, $routes) {
                if (array_key_exists($uri, $routes) && file_exists($routes[$uri])) {
                    include $routes[$uri];
                } else {
                    include 'views/404.php';
                }
            }

            // Gọi hàm routing với URI được yêu cầu
            route($requestedUri, $routes);
        ?>
    </div>

    <?php include 'layouts/footer.php'; ?>

    <!-- JS libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Carousel JS -->
    <script>
        $(document).ready(function () {
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