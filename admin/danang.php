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

    <div class="Location">
        
        <h1 style="margin-top: 30px;">KHÁCH SẠN TẠI ĐÀ NẴNG</h1>
        <div class="container_card" style="display: flex; margin:0 20px 0 20px;">
            <?php
                $sql = "SELECT * FROM products WHERE id_hotel=1";
                $result = mysqli_query($conn, $sql);
                while ($kq = mysqli_fetch_assoc($result)) {
                ?>
                    <a href="hotel_danang.php">
                        <div class="card" style="width: 18rem; display: grid; margin-right: 10px; margin-top: 30px; width: 330px;">
                        <img style="object-fit: cover; height: 400px;" src="<?php echo $kq['img']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><?php echo $kq['hotel'];?></p>
                        </div>
                    </div></a>

                <?php } ?>
        </div>
    </div>
    <?php include ('footer.php') ?>
</body>
</html>
