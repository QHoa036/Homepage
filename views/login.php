<?php
include 'database/conn.php';
session_start();

// Check if the user is already logged in
if (isset($_SESSION['mySession'])) {
    header('location:danhmucsp.php');
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

            header('Location: danhmucsp.php');
            exit();
        } else {
            $error_message = 'Tài khoản hoặc mật khẩu sai';
        }
    } else {
        $error_message = 'Tài khoản hoặc mật khẩu sai';
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/components/login.css">
</head>

