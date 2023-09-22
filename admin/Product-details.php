<?php
require_once('../model/connect.php');

if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Sử dụng MySQLi với Prepared Statements để ngăn chặn SQL Injection
    $query = "SELECT * FROM products WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $productId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $product = $result->fetch_assoc();
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
    <link rel="stylesheet" href="./css/Product-details.css">
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
    <?php include ('header.php') ?>

        <div class="containers">
            <div class="content">
                <div class="item-left">
                    <img src="<?php echo htmlspecialchars($product['image']); ?>" width="500" height="300" style="border-radius: 10px ;" alt="">
                </div>
                <div class="item-right">
                    <h1><?php echo htmlspecialchars($product['name']); ?></h1>
                    <div class="item-text">
                        <h4>Tại: <?php echo htmlspecialchars($product['hotel']); ?> </h4>
                        <p>Trạng thái: Còn phòng</p>
                        <p class="text-danger">Giá: <?php echo htmlspecialchars($product['price']); ?> đ</p>
                        <p>Số giường: <?php echo htmlspecialchars($product['description']); ?> </p>

                        <div class="d-flex justify-content-between">
                            <a href="addcart.php?id=<?php echo $kq['id']; ?>" class="btn btn-primary">Thêm vào Đơn đặt hàng</a>
                            <a href="view-cart?id= <?php echo $kq['id']; ?>" class="btn btn-warning">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php include ('footer.php') ?>
</body>
</html>