<?php
require_once '../model/connect.php';
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
        
    <div class="mymaincontent">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="../IMG/banner-du-lich-ha-noi_1688353361.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../IMG/banner-du-lich-kham-pha_1687763476.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../IMG/banner-khuyen-mai_1686543696-1_1687764607.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container-fluid">
        <form class="row g-3 m-2 p-1 border border-light shadow rounded translate-middle-y bg-white" action="search.php" method="POST">
            <div class="col-md-3">
                <label for="validationDefault01" class="form-label">Bạn muốn nghỉ dưỡng ở đâu?</label>
                    <div class="input-group" action="search.php" method="POST">
                        <span class="input-group-text" id="validationDefault01"><i class="fa-solid fa-location-dot"></i></span>
                        <input type="text" class="form-control" name="name-product" id="validationDefault01" placeholder="Nhập Khách sạn/ Điểm đến" required>
                    </div>
            </div>
            <div class="col-md-3">
                <label for="validationDefault02" class="form-label">Ngày nhận - Trả phòng</label>
                    <div class="input-group">
                        <span class="input-group-text" id="validationDefault02"><i class="fa-regular fa-calendar-days"></i></span>
                        <input type="date" class="form-control" id="validationDefault02" placeholder="" required>
                    </div>
            </div>
            <div class="col-md-2">
                <label for="validationDefaultUsername" class="form-label">Số phòng</label>
                <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2"><i class="fa-solid fa-house" style="color: #000000;"></i></span>
                <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" placeholder="Phòng" required >
                </div>
            </div>
            <div class="col-md-2">
                <label for="validationDefault03" class="form-label">Mã Khuyến mãi/ Voucher</label>
                <div class="input-group">
                <span class="input-group-text" id="validationDefault03"><i class="fa-solid fa-mattress-pillow"></i></span>    
                <input type="text" class="form-control" id="validationDefault03" placeholder="Nhập mã khuyến mãi..." required>
                </div>
            </div>
            <div class="col-md-2">
                <label for="validationDefault03" class="form-label"><i class="fa-solid fa-magnifying-glass"></i></label>
                <div class="input-group">
                    <button class="btn btn btn-warning" type="submit">  Tìm kiếm </button>
                </div>
            </div>
       </form>
        <div class="container">
            <div class="row p-3">
                <div class="col-md-3">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-3 m-auto">
                                <img src="../IMG/badge.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <p class="card-text fst-italic">Đa dạng điểm đến lựa chọn tốt nhất</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-3 m-auto">
                                <img src="../IMG/location.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <p class="card-text fst-italic">Đa dạng điểm đến lựa chọn tốt nhất</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-3 m-auto">
                            <img src="../IMG/rating.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <p class="card-text fst-italic">Đảm bảo chất lượng phục vụ tốt nhất</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-3 m-auto">
                            <img src="../IMG/medal.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <p class="card-text fst-italic">Hỗ trợ khách hàng nhanh nhất</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <div class="uudai container-fluid">
        <h2 class="title-home text-center fw-normal"><span class="fw-bolder me-2">ƯU ĐÃI</span>DÀNH CHO BẠN</h2>
        <div class="owl-carousel owl-theme">
            <?php
                    $sql = "SELECT * FROM products WHERE category_id=22";
                    $result = mysqli_query($conn, $sql);
                    while ($kq = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="item" style="width: 21rem; margin-bottom:20px;">
                            <h4><img src="<?php echo $kq['img']; ?>" class="card-img-top" alt="..."></h4>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $kq['name']; ?></h5>
                                <div class="d-flex justify-content-between">
                                    <p class="card-text fw-bolder text-warning"><?php echo $kq['price']; ?><sup> đ</sup></p>
                                    <p class="card-text "><i class="fa-regular fa-user"></i> <?php echo $kq['status']; ?> người quan tâm</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                <a href="addcart.php?id=<?php echo $kq['id']; ?>" class="btn btn-primary">Thêm vào Đơn đặt hàng</a>
                                <a href="Product-details.php?id= <?php echo $kq['id']; ?>" class="btn btn-warning">Chi tiết</a>
                                </div>
                            </div>
                        </div>

            <?php } ?>
        </div>
        <div class="row justify-content-center m-auto" role="group" style="width:200px" aria-label="Basic outlined example">
            <button type="button" class="btn btn-outline-warning"><a href="combo.php" class="text-dark text-decoration-none">Xem thêm <i class="fa-solid fa-arrow-right"></i></a></button>
        </div>
    </div>

    <div class="giatot container-fluid mt-4">
        <h2 class="title-home text-center fw-normal"><span class="fw-bolder me-2">COMBO</span>GIÁ TỐT</h2>
        <div class="row justify-content-center">
                    <?php
                    $sql = "SELECT * FROM products WHERE category_id=33";
                    $result = mysqli_query($conn, $sql);

                    while ($kq = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="card me-3" style="width: 21rem; margin-bottom:20px;">
                            <img src="<?php echo $kq['img']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $kq['name']; ?></h5>
                                <div class="d-flex justify-content-between">
                                    <p class="card-text fw-bolder text-warning"><?php echo $kq['price']; ?><sup> đ</sup></p>
                                    <p class="card-text "><i class="fa-regular fa-user"></i> <?php echo $kq['status']; ?> người quan tâm</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                <a href="addcart.php?id=<?php echo $kq['id']; ?>" class="btn btn-primary">Thêm vào Đơn đặt hàng</a>
                                <a href="Product-details.php?id= <?php echo $kq['id']; ?>" class="btn btn-warning">Chi tiết</a>
                                </div>
                            </div>
                        </div>

                <?php } ?>
        </div>
        <div class="row justify-content-center m-auto" role="group" style="width:200px" aria-label="Basic outlined example">
            <button type="button" class="btn btn-outline-warning"><a href="uudai.php" class="text-dark text-decoration-none">Xem thêm <i class="fa-solid fa-arrow-right"></i></a></button>
        </div>
    </div>
    
    <div class="diemden container-md mt-4">
    <h2 class="title-home text-center fw-normal"><span class="fw-bolder me-2">ĐIỂM ĐẾN</span>NỔI BẬT</h2>
        <div class="row d-flex justify-content-between p-2">
            <div class="col-4 text-center">
                <a href="hanoi.php"><img src="../IMG/hanoi-diadiem.jpg" class="img-fluid p-2 position-relative" style="height:100%" alt=""></a>
                <span><h3><i class="fa fa-location-dot me-2"></i>Hà Nội</h3></span>
            </div>
            <div class="col-4 text-center">
                <div class="d-flex flex-column">
                    <a href="saigon.php"><img src="../IMG/saigon-diadiem.png" class="img-fluid p-2" style="width: 100%;height:100%" alt=""></a>   
                    <span><h3><i class="fa fa-location-dot me-2"></i>TP.HCM</h3></span>  
                </div>
                <div class="d-flex flex-column">
                    <a href=""><img src="../IMG/halong-diadiem.jpg" class="img-fluid p-2" style="width: 100%;height:100%" alt=""></a>
                    <span><h3><i class="fa fa-location-dot me-2"></i>Hạ Long</h3></span>
                </div>
            </div>
            <div class="col-4 text-center ">
                <a href="danang.php"><img src="../IMG/danang-diadiem.jpg" class="img-fluid p-2" style="height:100%" alt=""></a>
                <span><h3><i class="fa fa-location-dot me-2"></i>Đà Nẵng</h3></span>
            </div>
        </div>
    </div>                

    <div class="tintuc container mt-5">
    <h2 class="title-home text-center fw-normal"><span class="fw-bolder me-2">TIN TỨC</span>NỔI BẬT</h2>
    <div class="row justify-content-center">
                <?php
                    $sql = "SELECT id,img,title,link FROM tintuc";
                    $result = mysqli_query($conn, $sql);

                    while ($kq = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="card me-3 p-3" style="width: 21rem; margin-bottom:20px;">
                            <img src="<?php echo $kq['img']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="<?php echo $kq['link']; ?>" class="text-dark text-decoration-none"><h5 class="card-title"><?php echo $kq['title']; ?></h5></a>
                                <div class="d-flex justify-content-between">
                                    <p class="card-text fw-bolder text-warning"></p>
                                </div>
                            </div>
                        </div>

                <?php } ?>
        </div>
    </div>



    <?php include ('footer.php') ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- custom JS code after importing jquery and owl -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel();
        });

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
</body>

</html>