<?php
session_start(); // เปิดใช้งาน session
if (isset($_SESSION['user_login'])) { // ถ้าเข้าระบบอยู่
    header("location: index.php"); // redirect ไปยังหน้า index.php
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>ระบบประเมินผลการปฏิบัติงาน (PA)</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/vec-mini.png" rel="icon" />
    <link href="assets/img/vec-mini.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@200&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1 class="text-light"><a href="index.php"><span>Wongnok Food</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">ยอดนิยม</a></li>
                    <li><a class="nav-link scrollto" href="#about">เมนูอาหาร</a></li>
                    <li><a class="nav-link scrollto" href="#services">ยอดนิยม</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">ติดต่อสอบถาม</a></li>
                    <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <section style="background-color: #D6DBDF;">
            <div class="container">

            <?php
            
                include_once("conn.php");
                //$objCon = connectDB(); // เชื่อมต่อฐานข้อมูล
                $username = mysqli_real_escape_string($objCon, $_POST['username']); // รับค่า username
                $password = mysqli_real_escape_string($objCon, $_POST['password']); // รับค่า password

                $strSQL = "SELECT * FROM member WHERE member_username = '$username' AND member_password = '$password'";
                $objQuery = mysqli_query($objCon, $strSQL);
                $row = mysqli_num_rows($objQuery);
                if($row) {
                    $res = mysqli_fetch_assoc($objQuery);
                    $_SESSION['user_login'] = array(
                        'member_id' => $res['member_id'],
                        'username' => $res['member_username'],
                        'fullname' => $res['member_fullname']
                    );
                    echo '<script>window.location="index.php";</script>';
                } else {
                    ?>
                    <div class="alert alert-success" role="alert">
                            Username หรือ Password ไม่ถูกต้อง!
                        </div>
                        <a href="login.php"><button class="btn btn-primary" type="button">ย้อนกลับ</button></a>
                    <?php
                }
            ?>
        </div>
    </section>
</body>