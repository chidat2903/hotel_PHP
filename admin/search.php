<?php
require_once('../model/connect.php');
$render = "";
if (isset($_POST['name-product'])) {
    $query = "SELECT * from products where name like '%" . $_POST['name-product'] . "%'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result)) {
        while ($table = mysqli_fetch_array($result)) {
            $render .= '
            <div class="card" style="width: 18rem; margin-bottom:20px; padding: 0 1px;">
            <img src="' . $table['image'] . '" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title">' . $table['name'] . '</h4>
                <h5 class="card-title">' . $table['hotel'] . '</h5>
                <p class="card-text text-danger fw-bold">Giá: ' . $table["price"] . ' đ</p>
                <div class="d-flex justify-content-between">
                    <a href="Product-details.php?id=' . $table['id'] . '" class="btn btn-primary">Chi Tiết</a>
                    <a href="addcart.php?id=' . $table['id'] . '" class="btn btn-primary">Thêm vào giỏ hàng</a>
                </div>
            </div>
        </div>
            ';
        }
    }
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

    <div class="container">
            <div class="title" style="text-align: center;margin-bottom: 20px;" >
                <h1>Tìm kiếm Phòng: <?php echo $_POST['name-product']; ?></h1>
            </div>
            <div class="row justify-content-between">
                <?php echo $render; ?>
            </div>
    </div>

    <?php include ('footer.php') ?>
</body>

</html>