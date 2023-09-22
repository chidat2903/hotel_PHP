<?php
require_once('../model/connect.php');

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
    <?php include('header.php') ?>
    <div class="container">
        <h1>Lịch sử xem phòng</h1>
        <div class="product-list">
            <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th> Ảnh phòng </th>
                                            <th> Tên phòng</th>                                           
                                            <th> Giá </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $idk = isset($_COOKIE["viewd"]) ? unserialize($_COOKIE["viewd"]) : [];
                                        if (isset($idk)) {
                                            foreach ($idk as $id) {
                                                $sql = "SELECT * FROM products WHERE id = $id";
                                                $result = mysqli_query($conn, $sql);
                                                if (!$result) {
                                                    echo 'Không thể chọn!';
                                                } else {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        if ($row['image'] == null || $row['image'] == '') {
                                                            $Image = "";
                                                        } else {
                                                            $Image = $row['image'];
                                                        }
                                        ?>
                                                        <tr>
                                                            <!-- Ảnh sản phẩm -->
                                                            <td>
                                                                <center><img src="<?php echo $Image; ?>" width=" 100px;"></center>
                                                            </td>

                                                            <!-- Tên sản phẩm -->
                                                            <td><?php echo $row['name']; ?></td>

                                                            <!-- Giá của 1 sản phẩm -->
                                                            <td><?php echo number_format($row['price']); ?></td>
                                        <?php
                                                    }
                                                }
                                            }

                                        }
                                        ?>
                                    </tbody>
                                </table>
        </div>
    </div>
    <?php include('footer.php') ?>
</body>
</html>
