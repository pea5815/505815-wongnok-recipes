<div class="row">
    <div class="col-lg-3 col-md-6 footer-contact">

        วิทยาลัยเทคนิคอ่างทอง <br />
        29/1 ถนนเทศบาล10 ตำบล ตลาดหลวง <br />
        อำเภอเมืองอ่างทอง อ่างทอง 14000 <br /><br />
        <strong>Phone:</strong> 035 611 656<br />
        <strong>Email:</strong> info@example.com<br />

    </div>

    <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
            <li>
                <i class="bx bx-chevron-right"></i> <a href="#">หน้าแรก</a>
            </li>
            <li>
                <i class="bx bx-chevron-right"></i> <a href="#">About us</a>
            </li>
            <li>
                <i class="bx bx-chevron-right"></i> <a href="#">Services</a>
            </li>
            <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Terms of service</a>
            </li>
            <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Privacy policy</a>
            </li>
        </ul>
    </div>

    <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
            <li>
                <i class="bx bx-chevron-right"></i> <a href="#">Web Design</a>
            </li>
            <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Web Development</a>
            </li>
            <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Product Management</a>
            </li>
            <li>
                <i class="bx bx-chevron-right"></i> <a href="#">Marketing</a>
            </li>
            <li>
                <i class="bx bx-chevron-right"></i>
                <a href="#">Graphic Design</a>
            </li>
        </ul>
    </div>
<!--
    <div class="col-lg-3 col-md-6 footer-links">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <?php
                        if (isset($_SESSION['user_login'])) { // ถ้าเข้าระบบอยู่
                            $user = $_SESSION['user_login'];
                            $group = $user['member_type_id'];
                            include "function.php";
                            $objCon = connectDB();
                            $sql = "SELECT * FROM member_type where member_type_id='$group'";
                            $result = $objCon->query($sql);

                            if ($result->num_rows > 0) {
                            // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $member_type_name=$row["member_type_name"];
                                }
                            }
                            ?>
                            <h5 class="card-title">ข้อมูลสมาชิก</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $user['fname']." ".$user['lname'];?></h6>
                            <p class="card-text">
                                สถานะ : <?php echo $member_type_name;?>
                            </p>
                
                <?php
                        }else{ ?>
                <h5 class="card-title">ข้อมูลเยี่ยมชมเว็บไซต์</h5>
                <p class="card-text">
                    สถานะ : บุคคลทั่วไป
                </p>
                <a class="getstarted scrollto" href="login.php">เข้าสู่ระบบ</a>
                <?php } ?>

            </div>
        </div>
    </div>
                        -->
</div>