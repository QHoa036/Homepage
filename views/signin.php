<?php
include 'database/conn.php';

function redirectToSignin() {
    // Get the current URL dynamically
    $currentUrl = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    // Parse the URL to get the base path
    $parsedUrl = parse_url($currentUrl);
    $basePath = $parsedUrl['scheme'] . '://' . $parsedUrl['host'] . dirname($parsedUrl['path']) . '/';

    // Output JavaScript to change the URL
    echo "<script type='text/javascript'>
            window.location.href = '$basePath';
        </script>";
}

// Kiểm tra xem user đăng nhập chưa
if (isset($_SESSION['mySession'])) {
    redirectToSignin();
    exit();
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch user from the taikhoan and thanhvien tables using a join
    $sql = "
            SELECT taikhoan.MaTK, taikhoan.TenDangNhap, taikhoan.MatKhau, thanhvien.TenTV, thanhvien.Email, thanhvien.Gioitinh, thanhvien.DiaChi, thanhvien.SDT, thanhvien.Hang
            FROM taikhoan
            JOIN thanhvien ON taikhoan.MaTK = thanhvien.MaTK
            WHERE taikhoan.TenDangNhap = '$username'
        ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Verify the password
        if (password_verify($password, $row['MatKhau']) || $password == $row['MatKhau']) {
            // Store the MaTK and user details in the session
            $_SESSION['MaTK'] = $row['MaTK'];
            $_SESSION['mySession'] = $username;

            // Store user info in session
            $_SESSION['user'] = [
                'TenTV' => $row['TenTV'],
                'Email' => $row['Email'],
                'Gioitinh' => $row['Gioitinh'],
                'Diachi' => $row['DiaChi'],
                'SDT' => $row['SDT'],
                'MaTK' => $row['MaTK'],
                'TenDangNhap' => $row['TenDangNhap'],
                'Hang' => $row['Hang']
            ];
            $userData = json_encode($_SESSION['user']);
            redirectToSignin();
            exit();
        } else {
            $error_message = 'Tài khoản hoặc mật khẩu sai';
        }
    } else {
        $error_message = 'Tài khoản hoặc mật khẩu sai';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/components/signin.css">
</head>

<body>
    <div class="login-container">
        <div class="title">
            <h1>ĐĂNG NHẬP TÀI KHOẢN</h1>
        </div>

        <form action="<?php echo url('/signin'); ?>" method="post">
            <label for="username">Tên đăng nhập *</label>
            <input type="username" name="username" id="username" placeholder="Username">

            <label for="password">Mật khẩu *</label>
            <input type="password" name="password" id="password" placeholder="Password">

            <div class="extra-options">
                <a href="<?php echo url('/forgot-password'); ?>">Quên mật khẩu?</a>
            </div>

            <?php if (!empty($error_message)): ?>
            <div class="error-message" style="color: red; margin-top: 10px; font-weight: bold;">
                <?php echo $error_message; ?>
            </div>
            <?php endif; ?>

            <div class="buttons">
                <button type="submit" name="login" class="login-btn">ĐĂNG NHẬP</button>
                <button type="button" onclick="window.location.href='<?php echo url('/register'); ?>'"
                    class="signup-btn">ĐĂNG KÝ</button>
            </div>
        </form>
    </div>

</body>

</html>