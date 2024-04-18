<?php
session_start();
if (!isset($_SESSION['user_login'])) { // ถ้าไม่ได้เข้าระบบอยู่
    header("location: login.php"); // redirect ไปยังหน้า login.php
    exit;
}

$user = $_SESSION['user_login'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Wongnok Food</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@200&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <?php
                include "nav.php";
            ?>

        </div>
    </header><!-- End Header -->

    <main id="main">
        <?php
                    include "conn.php";
                    $f_id = $_GET['id'];
                    $sql_food = "select * from food where food_id = '$f_id'";
                    $result_food = mysqli_query($objCon,$sql_food);
                    if ($result_food->num_rows > 0) {
                        while($row = $result_food->fetch_assoc()) {
                            $food_name = $row['food_name'];
                            $food_ingredient = $row['food_ingredient'];
                            $food_step = $row['food_step'];
                            $food_period = $row['food_period'];
                            $food_ingredient = $row['food_ingredient'];
                            $food_difficult = $row['food_difficult'];
                            $food_picture = $row['food_picture'];
                            $member_id = $row['member_id'];
                        }
                    }
                    ?>
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <img src="images-food/<?php echo $food_picture;?>" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3><?php echo $food_name;?></h3>
                            <ul>
                                <li><strong>เจ้าของเมนูอาหาร</strong>: 
                                <?php 
                                $member_id;
                                $sql_member = "select * from member where member_id = '$member_id'";
                                $result_member = mysqli_query($objCon,$sql_member);
                                if ($result_member->num_rows > 0) {
                                    while($row = $result_member->fetch_assoc()) {
                                        $fullname = $row['member_fullname'];
                                    }
                                    echo $fullname;
                                }
                                ?>
                                </li>
                                <li><strong>ความยากง่าย </strong>: 
                                <?php 
                                $food_difficult;
                                $sql_difficult = "select * from difficult where difficult_id = '$food_difficult'";
                                $result_difficult = mysqli_query($objCon,$sql_difficult);
                                if ($result_difficult->num_rows > 0) {
                                    while($row = $result_difficult->fetch_assoc()) {
                                        $difficult_name = $row['difficult_name'];
                                    }
                                    echo $difficult_name;
                                }
                                ?>
                                </li>
                                <li><strong>ระยะเวลา</strong>: <a href="#"><?php echo $food_period;?></a></li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>ส่วนผสม</h2>
                            <p>
                                <?php echo $food_ingredient;?>
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container py-4">
            <?php include'copyright.php'?>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>