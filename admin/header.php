<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
require_once '../model/connect.php';
?>

<header class="sticky-top">
        <div class="header1">
            <i class="fa-solid fa-phone fa-xl" style="color: #000000;"></i>
            <p>1900 9999</p>
            <a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook fa-xl" style="color: #000000;"></i></a>
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram fa-xl" style="color: #000000;"></i></a>
            <a href="https://www.youtube.com/"><i class="fa-brands fa-square-youtube fa-xl" style="color: #000000;"></i></a>
        </div>
        <a href="home.php"><img src="../IMG/poseidon_logo.png" alt=""></a>
        <div class="header2">
                <?php

                    if (!empty($_SESSION['username'])) {

                    ?>
                        <li style="list-style: none; font-size: 20px" class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo $_SESSION['username']; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="edit-user.php">Thông tin cá nhân</a></li>
                                <li><a class="dropdown-item" href="view-cart.php">Đơn đặt hàng</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="logout.php">Đăng xuất</a></li>
                            </ul>
                        </li>
                    <?php } else { ?>
                        <i class="fa-solid fa-user me-2"></i>
                        <a href="../admin/Login.php" class="text-dark fw-bold text-decoration-none me-2">Đăng Nhập</a>
                <?php } ?>
            <i class="fa-solid fa-earth-asia fa-xl" style="color: #000000;"></i>
            <tr>
                <td class="tdLabel"><label for="register_country" class="label"></label></td>
                <td>
                    <select name="country" id="register_country" style="width:100px; border: none; background-color: #EFE7E7;">
                        <option value="vietnam">Vietnam</option>
                        <option value="english">English</option>
                    </select>
                </td>
            </tr>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #EFE7E7; border: none;">
                    <i class="fa-solid fa-bars fa-xl" style="color: #000000;"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <li><button class="dropdown-item" type="button">Điểm đến</button></li>
                  <li><button class="dropdown-item" type="button">Ưu đãi</button></li>
                  <li><button class="dropdown-item" type="button">Combo</button></li>
                </ul>
              </div>
            
        </div>
    </header>