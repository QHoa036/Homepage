<?php
// Lấy loại sản phẩm
$categoryResult = mysqli_query($conn, 'SELECT MaLoai, TenLoai FROM loaisanpham');
// Lấy các hàng dưới dạng mảng kết hợp
$categoryData = mysqli_fetch_all($categoryResult, MYSQLI_ASSOC);
?>

<body>
    <nav class="navbar navbar-expand-lg bg-header-top">
        <div class="container-fluid d-flex align-items-center">

            <!-- Logo và title của web-->
            <div class="d-flex align-items-center">
                <div class="text-center text-lg-left py-2">
                    <img src="assets/svgs/logo.svg" alt="UEH Logo" class="navbar-brand-logo">
                </div>
                <div class="text-center text-lg-left py-2 px-2">
                    <a href="homepage.php">
                        <p class="navbar-brand-text">STATIONERY</p>
                    </a>
                </div>
            </div>

            <!-- Thanh tìm kiếm -->
            <?php
            if (isset($_GET['search-category'])) {
                // Lấy data tìm kiếm của người dùng trong đó: 
                // trim để xóa các khoảng trắng, strlower để chuyển về chữ thường, real_escape_string loại bỏ các kí tự đặc biệt
                $searchTerm = trim(strtolower($conn->real_escape_string($_GET['search-category'])));

                // Lấy các mã loại có têm trùng với data người dùng nhập vào
                $query = "SELECT MaLoai FROM loaisanpham WHERE TenLoai LIKE '%$searchTerm%'";
                $searchResult = mysqli_query($conn, $query);

                // kiểm tra kết quả tìm được
                if (mysqli_num_rows($searchResult) > 0) {
                    // Lấy kết quả tìm kiếm dưới dạng mảng
                    $searchData = mysqli_fetch_assoc($searchResult);
                    // Đưa đến trang category tại loại sản phẩm đó
                    header('Location: category.php#' . $searchData['MaLoai']);
                    exit();
                } else {
                    // Đưa đến trang không tìm thấy loại sản phẩm
                    header('Location: category.php?error=notfound');
                    exit();
                }
            }
            ?>
            <!-- form get  -->
            <form action="category.php" method="get">
                <div class="d-flex align-items-center justify-content-center position-relative search-container py-3">
                    <span><i class="fas fa-chevron-left search-icon"></i></span>
                    <input type="text" class="form-control search-input" name="search-category" id="search-input" placeholder="Tìm kiếm">
                    <!-- dropdown trong thanh tìm kiếm -->
                    <div class="searchbar-dropdown">
                        <ul class="searchbar-dropdown-menu" id="searchbar-dropdown-menu">
                            <?php foreach ($categoryData as $data): ?>
                                <a href="<?php echo 'category.php#' . $data['MaLoai']; ?>" style="color: black">
                                    <li class="searchbar-dropdown-item"><?php echo $data['TenLoai'] ?></li>
                                </a>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <span><button type="submit" class="search-btn"><i class="fas fa-search"></i></button></span>
                </div>
            </form>

            <!-- Các icon -->
            <div class="d-flex align-items-center justify-content-between">
                <div class="navbar-toolbar py-1">
                    <div class="icon-container">
                        <i class="fas fa-phone-alt"></i>
                        <i class="fas fa-map-marker-alt"></i>
                        <i class="fab fa-facebook-f"></i>
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-between">
                <div class="navbar-toolbar py-1">
                    <div class="language-switch" id="languageSwitch" onclick="toggleLanguage()">
                        <span id="languageText" class="active-language">VN</span>
                        <div class="language-switch-container">
                            <i class="fas fa-globe"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Các button chuyển trang -->
    <nav class="navbar navbar-expand-lg bg-header-bottom">
        <div class="container-fluid d-flex justify-content-end align-items-center">
            <!-- button khi ở màn hình điện thoại -->
            <button class="navbar-toggler bg-light my-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Các link của các trang -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <!-- trang giới thiệu -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-people-fill navbar-header-logo"></i>
                            Giới thiệu
                        </a>
                    </li>

                    <li>
                        <div class="vertical-divider"></div>
                    </li>
                    <!-- Danh mục sản phẩm -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-grid-fill navbar-header-logo"></i>
                            Danh mục sản phẩm
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach ($categoryData as $data): ?>
                                <li>
                                    <a class="dropdown-item"
                                        href="<?php echo 'category.php#' . $data['MaLoai']; ?>"><?php echo $data['TenLoai'] ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>

                    <li>
                        <div class="vertical-divider"></div>
                    </li>
                    <!-- Khuyến mãi -->
                    <li class="nav-item">
                        <a class="nav-link" href="discounts.php">
                            <i class="bi bi-fire navbar-header-logo"></i>
                            Khuyến mãi
                        </a>
                    </li>

                    <li>
                        <div class="vertical-divider"></div>
                    </li>
                    <!-- Hỏi đáp -->
                    <li class="nav-item">
                        <a class="nav-link" href="questions.php">
                            <i class="bi bi-question-circle-fill navbar-header-logo"></i>
                            Hỏi đáp
                        </a>
                    </li>

                    <li>
                        <div class="vertical-divider"></div>
                    </li>
                    <!-- Đăng nhập, đăng ký và đăng xuất -->
                    <?php
                    // Kiểm tra mySession có đăng nhập chưa
                    if (isset($_SESSION['mySession'])) {

                        // Lấy thông tin của user
                        $user = $_SESSION['user'];

                        // Lấy tên của user     
                        $name = $user['TenTV'];
                    ?>
                        <li class="nav-item dropdown">
                            <!-- In ra tên của user -->
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bi bi-person-circle navbar-header-logo"></i>
                                <?php echo $name; ?>
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                // Hàm để đăng xuất
                                function logout()
                                {
                                    // Xóa dữ liệu mySesion và user
                                    unset($_SESSION['mySession']);
                                    unset($_SESSION['user']);
                                }
                                ?>
                                <li><a class="dropdown-item" href="<?php echo logout() ?>">Đăng xuất</a></li>
                            </ul>
                        </li>
                    <?php
                    } else {
                        // Khi user chưa đăng nhập thì hiển thị button đăng nhập và đăng ký
                    ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bi bi-box-arrow-in-right navbar-header-logo"></i>
                                Đăng nhập
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="signin.php">Đăng nhập</a></li>
                                <li><a class="dropdown-item" href="signup.php">Đăng ký</a></li>
                            </ul>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>



</body>

</html>