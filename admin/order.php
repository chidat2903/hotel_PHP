<?php
require_once('../model/connect.php');

if (isset($_GET['id'])) {
    $productsId = $_GET['id'];

    // Sử dụng MySQLi với Prepared Statements để ngăn chặn SQL Injection
    $query = "SELECT * FROM products WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $productsId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $products = $result->fetch_assoc();
    } else {
        // Xử lý trường hợp không tìm thấy sản phẩm
        echo "Product not found.";
        exit();
    }
} else {
    // Xử lý trường hợp không có ID sản phẩm được truyền
    echo "Product ID not provided.";
    exit();
}

$bookingDays = 0;
$totalPrice = 0;

if (isset($_POST['booking_days'])) {
    // Lấy số ngày đặt phòng từ form
    $bookingDays = $_POST['booking_days'];
    
    // Tính toán tổng số tiền dựa trên số ngày đặt phòng
    $totalPrice = $bookingDays * $products['price'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="stylesheet" href="../css/chinhanh.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="css/order.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Bootstrap Carousel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
</head>

<body>
        <?php include('header.php')?>
        <form method="post">
        <div class="content" style="background-color: #F3F3F3; width:70%;margin: 50px 0px 50px 15%;">
                <div class="item-left">
                    <img src="<?php echo htmlspecialchars($products['image']); ?>" width="500" height="300" style="border-radius: 10px ;" alt="">
                </div>
                <div class="item-right">
                    <h3><?php echo htmlspecialchars($products['name']); ?></h3>
                    <div class="item-text">
                        <p>Trạng thái: còn phòng</p>
                        <p>Đánh giá: <?php echo htmlspecialchars($products['quantity']); ?><i class="fa-solid fa-star fa-sm" style="color: #000000; margin-left: 5px;"></i></p>
                        <p>Số ngày: <input type="number" name="booking_days" min="1" style="margin-left:11px;"></p>
                        <p>Bắt đầu từ <input type="date"></p>
                        <p>Giá: <?php echo htmlspecialchars($products['price']); ?>đ/ngày</p>
                        <p>Tổng tiền: <?php echo $totalPrice; ?>đ</p>
                        <div class="pay">
                            <div class="buy" style="margin-bottom: 10px;">
                                <button style=" width: 300px; height:50px; border-radius:5px;">
                                    <a href="delete-cart.php?id=0" style="text-decoration: none;color:#000;"> Đặt hàng </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <?php include('footer.php')?>
</body>
</html>