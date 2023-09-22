<?php
require_once("../model/connect.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';

//Tạo một phiên bản; chuyển đúng cho phép ngoại lệ
$mail = new PHPMailer(true);



$noidung = "";
try {                //Bật đầu ra gỡ lỗi chi tiết
    $mail->isSMTP();                                            //Gửi bằng SMTP
    $mail->Host       = 'smtp.gmail.com';                     // Đặt máy chủ SMTP để gửi qua
    $mail->SMTPAuth   = true;                                   //Kích hoạt xác thực SMTP
    $mail->Username   = 'minhmanuzu@gmail.com';                     //tên người dùng SMTP
    $mail->Password   = 'vdkvzshttyipttkw';                               //Mật khẩu SMTP
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Bật mã hóa TLS ngầm
    $mail->Port       = 465;                                    //Cổng TCP để kết nối; sử dụng 587 nếu bạn đã đặt SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

    //Người nhận
    $mail->setFrom('minhmanuzu@gmail.com', 'Poseidon-hotel Service');
    $mail->addAddress('nguyenphanchidat2903@gmail.com', $name);     //Thêm người nhận            //Tên là tùy chọn
    // $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('minhmanuzu@gmail.com');
    // $mail->addBCC('bcc@example.com');

    //Tệp đính kèm
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Thêm tệp đính kèm
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Tên tùy chọn

    //Content
    $mail->isHTML(true);                                  //Đặt định dạng email thành HTML
    $mail->Subject = 'POSEIDON-HOTEL SERVICE';
    foreach ($_SESSION['cart'] as $id => $prd) {
        $sql = "SELECT * FROM products WHERE id = $id";
        $result = mysqli_query($conn, $sql);
    
        if ($result) {
            $row = mysqli_fetch_assoc($result);
        }
    }

    $noidung1 .= '
        <h2>THÔNG TIN ĐẶT PHÒNG TỪ PASEIDON-HOTEL</h2>
        <p> Tên Khách hàng: '  .  $name  . '</p> 
        <p> Số điện thoại: '  . $phone . '</p> 
        <p> Địa chỉ: '  . $address . '</p> 
        <p> Thông tin sản phẩm: '  . $infor . '</p> 
        
        
        <p> "Tổng số tiền: '  . $total . '<sup> đ</sup></p> 
        <p> Cảm ơn quý khách đã tin tưởng sử dụng dịch vụ! Hy vọng quý khách có thể hài lòng với những trải nghiệm cùng khách sạn chúng tôi, Hẹn gặp lại!"</p>
    ';
    $noidung=$noidung1;

    $mail->Body    = $noidung;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<script type=\"text/javascript\">alert(\"Đơn hàng của bạn đã được gửi đến Email của bạn!Vui lòng kiển tra email, Xin cảm ơn.\");</script>";
} catch (Exception $e) {
    echo "<script type=\"text/javascript\">alert(\"Gửi email lỗi! Vui lòng kiểm tra lại.\");</script>";
}

?>