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
                    <?php
                    include "conn.php";
                    if(isset($_POST['submit']))
                    {
                        $imgname=$_FILES['file']['name'];
                        echo '<br>';
                        $extension = pathinfo($imgname,PATHINFO_EXTENSION);
                        $randomno=rand(0,100000);
                        $rename='Upload'.date('Ymd').$randomno;
                        $newname=$rename.'.'.$extension;
                        $filename=$_FILES['file']['tmp_name'];
                        
                        $food_name = $_POST['food_name'];
                        $food_ingredient = $_POST['food_ingredient'];
                        $food_step = $_POST['food_step'];
                        $food_period = $_POST['food_period'];
                        $food_difficult = $_POST['food_difficult'];
                        $member_id = $user['member_id'];

                        if(move_uploaded_file($filename, 'images-food/'.$newname))
                        {
                            ?>
                    <h2>
                        <div class="alert alert-success" role="alert">
                            <a href="food.php">เพิ่มข้อมูลอาหารสำเร็จ </a>
                        </div>
                    </h2>
                    <?php
                            //$sql_insert = "UPDATE member SET member_picture='$newname' WHERE member_id='$m_id'";

                            $sql_insert = "INSERT INTO food (food_name, food_picture, food_ingredient, food_step, food_period, food_difficult, member_id)
    VALUES ('$food_name', '$newname', '$food_ingredient', '$food_step', '$food_period', '$food_difficult', '$member_id')";
                            $insert = $objCon->query($sql_insert); 
                            if($insert){ 
                                $statusMsg = "The file ".$imgname. " has been uploaded successfully."; 
                            }else{ 
                                $statusMsg = "File upload failed, please try again."; 
                            }  
                        }
                        else
                        {
                            echo "not uploaded";
                        }
                    }
                    
                    ?>
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