<?php 
session_start();
ob_start();
?>

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />

    <!-- JS -->
    <script src="carousel/vendors/jquery.min.js"></script>
    <script src="carousel/owlcarousel/owl.carousel.js"></script>

    <!-- Header -->
    <link rel="stylesheet" href="assets/css/layouts/header.css" />
</head>

<body>
    <!-- Header -->
    <?php include 'layouts/header.php'; ?>

    <div class="outlet">
        <?php
            // Lấy tham số URL, loại bỏ dấu gạch chéo ở cuối và chuẩn hóa request URI
            $requestedUri = '/' . trim(isset($_GET['url']) ? $_GET['url'] : '', '/');

            // Định nghĩa các route và các file tương ứng của chúng
            $routes = [
                '/' => 'views/homepage.php', // Trang chủ
                '/discount' => 'views/discount.php', // Khuyến mãi
                '/signin' => 'views/signin.php', // Đăng nhập
                '/signup' => 'views/signup.php', // Đăng ký
                '/forgot-password' => 'views/quenMK.php', // Quên mật khẩu
                '/category/{name}' => 'views/category.php', // Danh mục sản phẩm {name}
                '/product/{id}' => 'views/product.php',  // Chi tiết sản phẩm {id}
            ];

            // Hàm để xử lý request và bao gồm file tương ứng
            function route($uri, $routes)
            {
                foreach ($routes as $route => $file) {
                    // Chuyển đổi route thành regex
                    $routePattern = preg_replace('/\{[a-zA-Z0-9_]+\}/', '([a-zA-Z0-9_]+)', $route);
                    $routePattern = str_replace('/', '\/', $routePattern);
                    $routePattern = '/^' . $routePattern . '$/';

                    // Kiểm tra nếu URI khớp với route
                    if (preg_match($routePattern, $uri, $matches)) {
                        array_shift($matches);  // Bỏ phần tử đầu tiên (toàn bộ chuỗi khớp)
                        if (file_exists($file)) {
                            // Truyền các tham số vào file được bao gồm
                            include $file;
                            return;
                        }
                    }
                }
                // Nếu không khớp route nào, bao gồm file 404
                include 'views/404.php';
            }

            // Hàm để tạo URL từ route
            function url($path)
            {
                // Lấy URL cơ sở từ server
                $baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . "://$_SERVER[HTTP_HOST]";

                // Lấy đường dẫn thư mục hiện tại
                $currentDir = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');

                // Tạo URL đầy đủ
                return $baseUrl . $currentDir . '/' . trim($path, '/');
            }

            // Gọi hàm routing với URI được yêu cầu
            route($requestedUri, $routes);
        ?>
    </div>

    <!-- Footer -->
    <?php include 'layouts/footer.php'; ?>

    <!-- JS libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>

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