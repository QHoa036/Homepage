<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/layouts/headers.css" />
</head>

<body>
    <!--Navbar-->
    <div class="container-fluid bg-header-top py-2">
        <div class="row">
            <div class="col-sm-6 col-md-2">
                <img src="assets/imgs/parts/header_logo.png" alt="UEH Logo" class="navbar-brand-logo" />
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="#">
                    <p class="navbar-brand-text">STATIONERY</p>
                </a>
            </div>

            <div class="col-sm-12 col-md-4 search-bar">
                <i class="fas fa-chevron-left"></i>
                <input type="search" placeholder="Tìm kiếm" aria-label="Search">
                <i class="fas fa-search"></i>
            </div>

            <div class="col-sm-2 col-md-3">
                <div class="icon-container">
                    <i class="fas fa-phone-alt"></i>
                    <i class="fas fa-map-marker-alt"></i>
                    <i class="fab fa-facebook-f"></i>

                    <div class="language-switch" id="languageSwitch" onclick="toggleLanguage()">
                        <span id="languageText" class="active-language">Vie</span>
                        <div class="language-switch-container">
                            <i class="fas fa-globe"></i>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-header-bottom">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-people-fill navbar-header-logo"></i>
                            Giới thiệu
                        </a>
                    </li>

                    <div class="vertical-divider"></div>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-grid-fill navbar-header-logo"></i>
                            Danh mục sản phẩm
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sách</a></li>
                            <li><a class="dropdown-item" href="#">Bút</a></li>
                            <li><a class="dropdown-item" href="#">Phụ kiện</a></li>
                            <li><a class="dropdown-item" href="#">Máy tính</a></li>
                            <li><a class="dropdown-item" href="#">Sổ tay</a></li>
                        </ul>
                    </li>

                    <div class="vertical-divider"></div>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-fire navbar-header-logo"></i>
                            Khuyến mãi
                        </a>
                    </li>

                    <div class="vertical-divider"></div>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-question-circle-fill navbar-header-logo"></i>
                            Hỏi đáp
                        </a>
                    </li>

                    <div class="vertical-divider"></div>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-box-arrow-in-right navbar-header-logo"></i>
                            Đăng nhập
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Đăng nhập</a></li>
                            <li><a class="dropdown-item" href="#">Đăng ký</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Custom JS -->
    <script>
        function toggleLanguage() {
            var languageText = document.getElementById('languageText');
            if (languageText.innerText === 'Vie') {
                languageText.innerText = 'En';
            } else {
                languageText.innerText = 'Vie';
            }
        }
    </script>
</body>

</html>