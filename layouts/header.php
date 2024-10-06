<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/layouts/headers.css" />
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-header-top">
        <div class="container-fluid py-2">
            <a class="d-flex align-items-center" href="#">
                <img src="assets/imgs/parts/header_logo.png" alt="UEH Logo" class="navbar-brand-logo" />
                <div>
                    <p class="navbar-brand-text">STATIONERY</p>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="d-flex flex-grow-1 align-items-center justify-content-center">
                <div class="search-bar">
                    <i class="fas fa-chevron-left"></i>
                    <input type="text" placeholder="Tìm kiếm">
                    <i class="fas fa-search"></i>
                </div>
            </div>

            <div class="d-flex align-items-center">
                <div class="icon-container">
                    <!-- Phone Icon -->
                    <i class="fas fa-phone-alt"></i>

                    <!-- Location Icon -->
                    <i class="fas fa-map-marker-alt"></i>

                    <!-- Facebook Icon -->
                    <i class="fab fa-facebook-f"></i>
                </div>

                <div class="language-switch" id="languageSwitch" onclick="toggleLanguage()">
                    <span id="languageText" class="active-language">Vie</span>
                    <div class="language-switch-container">
                        <i class="fas fa-globe"></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-header-bottom">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="assets/imgs/parts/components/header1.png" class="navbar-header-logo" />
                            Giới thiệu
                        </a>
                    </li>

                    <div class="vertical-divider"></div>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="assets/imgs/parts/components/header2.png" class="navbar-header-logo" />
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
                            <img src="assets/imgs/parts/components/header3.png" class="navbar-header-logo" />
                            Khuyến mãi
                        </a>
                    </li>

                    <div class="vertical-divider"></div>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="assets/imgs/parts/components/header4.png" class="navbar-header-logo" />
                            Hỏi đáp
                        </a>
                    </li>

                    <div class="vertical-divider"></div>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="assets/imgs/parts/components/header5.png" class="navbar-header-logo" />
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