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
        <!-- ======= Contact Us Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <p>เพิ่มข้อมูลอาหาร</p>
                </div>

                <div class="row">

                    <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <form action="food_add_action.php" enctype="multipart/form-data" method="post"
                            class="form-control">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">ชื่ออาหาร</label>
                                    <input type="text" name="food_name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="form-group col-md-6 mt-3 mt-md-0">
                                    <label for="name">รูปภาพอาหาร</label>
                                    <input type="file" class="form-control" name="file" placeholder="รูปภาพอาหาร"
                                        required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">ส่วนผสม</label>
                                <textarea class="form-control" name="food_ingredient" rows="6"
                                    required></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">ขั้นตอน</label>
                                <textarea class="form-control" name="food_step" rows="6" required></textarea>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 mt-3 mt-md-0">
                                    <label for="name">ความยากง่าย</label>
                                    <select name="food_difficult" class="form-control">
                                        <?php 
                                        include "conn.php";
                                        $sql_difficult = "select * from difficult";
                                        $result_difficult = mysqli_query($objCon,$sql_difficult);
                                        if ($result_difficult->num_rows > 0) {
                                            while($row = $result_difficult->fetch_assoc()) {
                                                ?>
                                        <option value="<?php echo $row['difficult_id'];?>">
                                            <?php echo $row['difficult_name'];?></option>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group col-md-6 mt-3 mt-md-0">
                                    <label for="name">ระยะเวลา</label>
                                    <select name="food_period" class="form-control">
                                        <?php 
                                        include "conn.php";
                                        $sql_period = "select * from period";
                                        $result_period = mysqli_query($objCon,$sql_period);
                                        if ($result_period->num_rows > 0) {
                                            while($row = $result_period->fetch_assoc()) {
                                                ?>
                                        <option value="<?php echo $row['period_id'];?>">
                                            <?php echo $row['period_name'];?></option>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="text-center"><button type="submit" name="submit">บันทึกข้อมูล</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Us Section -->

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