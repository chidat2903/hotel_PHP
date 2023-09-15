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
    <!-- <header>
        <div class="header1">
            <i class="fa-solid fa-phone fa-xl" style="color: #000000;"></i>
            <p>1900 9999</p>
            <a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook fa-xl" style="color: #000000;"></i></a>
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram fa-xl" style="color: #000000;"></i></a>
            <a href="https://www.youtube.com/"><i class="fa-brands fa-square-youtube fa-xl" style="color: #000000;"></i></a>
        </div>
        <img src="../admin/IMG/logo/poseidon_logo.png" alt="">
        <div class="header2">
            <button class="login">ĐĂNG NHẬP</button>
            <i class="fa-solid fa-earth-asia fa-xl" style="color: #000000;"></i>
            <tr>
                <td class="tdLabel"><label for="register_country" class="label"></label></td>
                <td>
                    <select name="country" id="register_country" style="width:100px; border: none; background-color: #a8d4ee;">
                        <option value="india">Vietnam</option>
                        <option value="pakistan">English</option>
                    </select>
                </td>
            </tr>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #a8d4ee; border: none;">
                    <i class="fa-solid fa-bars fa-xl" style="color: #000000; background: #a8d4ee"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <li><button class="dropdown-item" type="button">Điểm đến</button></li>
                  <li><button class="dropdown-item" type="button">Ưu đãi</button></li>
                  <li><button class="dropdown-item" type="button">Combo</button></li>
                </ul>
              </div>
        </div>
    </header> -->

    <div class="Location">
        
        <h1 style="margin-top: 30px;">KHÁCH SẠN TẠI SÀI GÒN</h1>
        <div class="container_card" style="display: flex; margin:0 20px 0 20px;">
            <?php
                $sql = "SELECT * FROM products WHERE id_hotel=7";
                $result = mysqli_query($conn, $sql);
                while ($kq = mysqli_fetch_assoc($result)) {
                ?>
                    <a href="hotel_hanoi.php">
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
