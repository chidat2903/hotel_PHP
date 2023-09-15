<?php
require_once '../model/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Nhánh</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="stylesheet" href="../CSS/chinhanh.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
<?php include ('header.php') ?>
<div class="giatot container-fluid mt-4">
        <h2 class="title-home text-center fw-normal"><span class="fw-bolder me-2">COMBO</span>GIÁ TỐT</h2>
        <div class="row justify-content-center">
                <?php
                    $sql = "SELECT id,img,price,title,status FROM combo";
                    $result = mysqli_query($conn, $sql);

                    while ($kq = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="card me-3" style="width: 21rem; margin-bottom:20px;">
                            <img src="<?php echo $kq['img']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $kq['title']; ?></h5>
                                <div class="d-flex justify-content-between">
                                    <p class="card-text fw-bolder text-warning"><?php echo $kq['price']; ?><sup> đ</sup></p>
                                    <p class="card-text "><i class="fa-regular fa-user"></i> <?php echo $kq['status']; ?> người quan tâm</p>
                                </div>
                            </div>
                        </div>

                <?php } ?>
        </div>
    </div>
    <?php include ('footer.php') ?>
    
</body>
</html>