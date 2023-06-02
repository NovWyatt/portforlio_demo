<?php
require 'path/to/PHPMailer/PHPMailerAutoload.php';

// Lấy dữ liệu từ biểu mẫu
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

// Tạo một đối tượng PHPMailer
$mail = new PHPMailer;

// Cấu hình thông tin gửi email
$mail->isSMTP();
$mail->Host = 'smtp.example.com'; // Địa chỉ SMTP server của bạn
$mail->SMTPAuth = true;
$mail->Username = 'your_email@example.com'; // Địa chỉ email của bạn
$mail->Password = 'your_password'; // Mật khẩu email của bạn
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('your_email@example.com', 'Your Name'); // Địa chỉ và tên người gửi
$mail->addAddress('recipient@example.com', 'Recipient Name'); // Địa chỉ và tên người nhận
$mail->Subject = 'New Contact Form Submission';
$mail->Body = "Full Name: $fullname\nEmail: $email\n\n$message"; // Nội dung email

// Gửi email
if ($mail->send()) {
    http_response_code(200); // Trạng thái thành công
} else {
    http_response_code(500); // Trạng thái lỗi máy chủ
}
