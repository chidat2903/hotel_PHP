<?php
session_start(); // Khởi động phiên

require_once('../model/connect.php');

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    // Truy vấn thông tin người dùng từ cơ sở dữ liệu
    $query = "SELECT * FROM users WHERE username=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
    } else {
        echo "User not found.";
        exit();
    }

    if (isset($_POST['edit'])) {
        // Người dùng nhấn nút "Chỉnh sửa", cho phép chỉnh sửa thông tin
        $isEditing = true;
    } elseif (isset($_POST['update'])) {
        // Người dùng đã chỉnh sửa thông tin, cập nhật vào cơ sở dữ liệu
        $newFullname = $_POST['new-fullname'];
        $newUsername = $_POST['new-username'];
        $newEmail = $_POST['new-email'];
        $newAddress = $_POST['new-address'];
        $newPhone = $_POST['new-phone'];
        $newPassword = $_POST['new-password'];
        $userId = $user['id']; // Lấy ID người dùng từ kết quả truy vấn

        $updateQuery = "UPDATE users SET fullname=?, username=?, email=?, address=?, phone=?, password=? WHERE id=?";
        $updateStmt = $conn->prepare($updateQuery);
        $updateStmt->bind_param('ssssssi', $newFullname, $newUsername, $newEmail, $newAddress, $newPhone, $newPassword, $userId);

        if ($updateStmt->execute()) {
            // Cập nhật thành công, cập nhật thông tin trong phiên
            $_SESSION['fullname'] = $newFullname;
            $_SESSION['username'] = $newUsername;
            $_SESSION['email'] = $newEmail;
            $_SESSION['address'] = $newAddress;
            $_SESSION['phone'] = $newPhone;
            $_SESSION['password'] = $newPassword;
            header("Location:edit-user.php?thanhcong"); // Để tải lại trang
            exit();
        } else {
            echo "Error updating user information: " . $conn->error;
        }
    }
} else {
    // Người dùng chưa đăng nhập, điều hướng đến trang đăng nhập hoặc trang chính
    header("Location: login.php"); // Thay thế "login.php" bằng trang đăng nhập của bạn
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
    <link rel="stylesheet" href="../css/style.css">
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
    <h1>User Profile</h1>
    <?php if (isset($isEditing)): ?>
        <!-- Form chỉnh sửa thông tin -->
        <form method="POST">
            <label for="new-fullname">Full Name:</label>
            <input type="text" id="new-fullname" name="new-fullname" value="<?php echo $user['fullname']; ?>"><br>

            <label for="new-username">Username:</label>
            <input type="text" id="new-username" name="new-username" value="<?php echo $user['username']; ?>"><br>

            <label for="new-email">Email:</label>
            <input type="email" id="new-email" name="new-email" value="<?php echo $user['email']; ?>"><br>

            <label for="new-address">Address:</label>
            <input type="text" id="new-address" name="new-address" value="<?php echo $user['address']; ?>"><br>

            <label for="new-phone">Phone:</label>
            <input type="number" id="new-phone" name="new-phone" value="<?php echo $user['phone']; ?>"><br>

            <label for="new-password">Password:</label>
            <input type="password" id="new-password" name="new-password" value="<?php echo $user['password']; ?>"><br>

            <!-- Các trường thông tin khác -->

            <input type="submit" name="update" value="Update">
        </form>
    <?php else: ?>
        <!-- Hiển thị thông tin người dùng -->
        <p><strong>Full Name:</strong> <?php echo $user['fullname']; ?></p>
        <p><strong>Username:</strong> <?php echo $user['username']; ?></p>
        <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
        <p><strong>Address:</strong> <?php echo $user['address']; ?></p>
        <p><strong>Phone:</strong> <?php echo $user['phone']; ?></p>
        <p><strong>Password:</strong> <?php echo $user['password']; ?></p>
        <!-- Hiển thị các trường thông tin khác -->

        <form method="POST">
            <input type="submit" name="edit" value="Edit">
        </form>
    <?php endif; ?>

    <?php include ('../admin/footer.php') ?>
</body>
</html>