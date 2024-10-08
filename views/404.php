<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page</title>

    <link rel="stylesheet" href="assets/css/components/404.css">
</head>

<body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center">
            <h1 class="display-1 fw-bold">404</h1>

            <div class="four_zero_four_bg my-3"></div>

            <h3>Rất tiếc, trang này không thể được tìm thấy</h3>

            <button class="btn btn-success w-50 btn-lg mt-5"" onclick=" goBack()">Quay lại</button>
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>