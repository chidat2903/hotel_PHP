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
    <link rel="stylesheet" href="../css/chinhanh.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
<?php include ('header.php') ?>
<div class="slider" style="margin: 10px 0; display: flex; justify-content: center; align-items: center;">
    <div class="content" style=" width: 1400px; background-color: #fff; text-align: center; margin: 100px 100px;">
        <div class="container justify-content-between" style="display:flex; margin:auto; display: grid; grid-template-columns: repeat(3, 310px);">
        <?php
        $sql = "SELECT id,name,image, description, price, acreage FROM products WHERE category_id=1";
        $result = mysqli_query($conn, $sql);
        while ($kq = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="card" style="width:300px; position:relative; margin: 0 10px 10px 0;">
                        <div class="card_top">
                            <img style="object-fit: cover; height: 300px;" src="<?php echo $kq['image']; ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card_bot" style="padding:2px; margin-bottom: 20px;">
                            <h5 style=""><?php echo $kq['name']; ?></h3>
                         <div style="display:flex;">
                                <i class="fa-solid fa-maximize fa-lg" style="color: #000000; margin-top:12px"></i>
                                <p style="margin-right:10px"><?php echo $kq['acreage'];?><sup>m2</sup></p>
                             <i class="fa-solid fa-bed fa-lg" style="color: #000000; margin-top:12px; margin-right:10px;"></i>
                                <p><?php echo $kq['description'];?></p>
                            </div>
                             <div style="display:flex;  bottom: 0px ;">
                                <p class="text-danger fw-bold">Chỉ từ <?php echo $kq['price'];?><sup>đ /đêm</sup></p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="addcart.php?id=<?php echo $kq['id']; ?>" class="btn btn-primary">Thêm vào Đơn đặt hàng</a>
                                <a href="Product-details.php?id= <?php echo $kq['id']; ?>" class="btn btn-warning">Chi tiết</a>
                            </div>
                            
                        </div>
                    </div>
        <?php } ?>
        </div>
    </div>
</div>

    
</body>
</html>