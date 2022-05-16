<?php 
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Insurance</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!-- BOXICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>


    //   header('location: request_company.php' );


    <!-- HEADER -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="assets/img/nopic.jpg" alt="" class="nav__logo-img" style="width:  24px; height: 24px;">
                Insurance
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="" class="nav__link">เกี่ยวกับเรา</a>
                    </li>

                    <li class="nav__item">
                        <a href="inventory" class="nav__link">ผลิตภัณฑ์</a>
                    </li>

                    <li class="nav__item">
                        <a href="store" class="nav__link">ข่าวสารและกิจกรรม</a>
                    </li>

                    <li class="nav__item">
                        <a href="new" class="nav__link">ติดต่อ</a>
                    </li>

                </ul>
                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>


                <img src="assets/img" alt="" class="nav__img">
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-grid-alt'></i>
            </div>
        </nav>
    </header>

    <main class="main">
    <?php echo($_SESSION['price']); echo($_SESSION['inputTypeproduct']); ?>
        <!-- HOME -->
        <section class="home" id="home">
            
            <div class="home__container container grid">
                <img src="assets/img/test.jpg" alt="" class="home__img">
                <div class="home__data">
                    <h1 class="home__title">
                        ผลิตภัณฑ์
                    </h1>
                    <h2 class="home__title">ประกันภัยขนส่งสินค้า</h2>
                    <p class="home__description">
                        กรมธรรม์ประกันภัยคุ้มครองความสูญเสียหรือความเสียหายของสินค้าที่นำเข้า หรือ ส่งออก โดยทางบก
                        ที่เกิดขึ้นในระหว่างขนส่งสินค้า
                    </p>
                    


                    <!-- Button trigger modal -->
                    <button type="button" class="button" data-toggle="modal" data-target="#start_modal">
                        เริ่มต้นใช้งาน
                    </button>


                </div>
            </div>
        </section>

        <section class="new section container" id="new">

            <div class="new__container">
                <div class="swiper new-swiper">
                    <div class="swiper-wrapper">
                        <article class="new__card swiper-slide">
                            <img src="assets/img/ทิพยประกันภัย.png" alt="" class="new__img">
                            <h3 class="insurance_title">ทิพยประกันภัย</h3>
                            <form><input type='submit' class='btn btn-primary  ' value='เลือก' formaction='https://www.dhipaya.co.th/th/product-detail-12-26.html'></form>
                            

                        </article>
                        <article class="new__card swiper-slide">
                            <img src="assets/img/กรุงเทพประกันภัย.png" alt="" class="new__img">
                            <h3 class="insurance_title">กรุงเทพประกันภัย</h3>
                            <form><input type='submit' class='btn btn-primary  ' value='เลือก' formaction='https://www.bangkokinsurance.com/product/marine-cargo/cargo'></form>


                        </article>
                        <article class="new__card swiper-slide">
                            <img src="assets/img/วิริยะประกันภัย.jpg" alt="" class="new__img">
                            <h3 class="insurance_title">วิริยะประกันภัย</h3>
                            <form><input type='submit' class='btn btn-primary  ' value='เลือก' formaction='https://www.viriyah.co.th/th/customer-product-logistic.php?id=53'></form>

                        </article>
                        <article class="new__card swiper-slide">
                            <img src="assets/img/เมืองไทยประกันภัย.jpg" alt="" class="new__img">
                            <h3 class="insurance_title">เมืองไทยประกันภัย</h3>
                            <form><input type='submit' class='btn btn-primary  ' value='เลือก' formaction='https://www.muangthaiinsurance.com/th/product/detail/30'></form>


                        </article>
                        <article class="new__card swiper-slide">
                            <img src="assets/img/เอ็ม เอส ไอ จี ประกันภัย.png" alt="" class="new__img">
                            <h3 class="insurance_title">เอ็ม เอส ไอ จี ประกันภัย</h3>
                            <form><input type='submit' class='btn btn-primary  ' value='เลือก' formaction='https://www.msig-thai.com/th/business-insurance/inland-cargo'></form>


                        </article>
                        <article class="new__card swiper-slide">
                            <img src="assets/img/มิตรแท้ประกันภัย.png" alt="" class="new__img">
                            <h3 class="insurance_title">มิตรแท้ประกันภัย</h3>
                            <form><input type='submit' class='btn btn-primary  ' value='เลือก' formaction='https://www.mittare.com/web2016/?page_id=3478&lang=th'></form>


                        </article>
                        <article class="new__card swiper-slide">
                            <img src="assets/img/คุ้มภัยโตเกียวมารีนประกันภัย.jpg" alt="" class="new__img">
                            <h3 class="insurance_title">คุ้มภัยโตเกียวมารีนประกันภัย</h3>
                            <form><input type='submit' class='btn btn-primary  ' value='เลือก' formaction='https://www.tokiomarine.com/th/th-general/home/commercial/marine/marine-cargo-inland-cargo-policy.html'></form>


                        </article>
                        <article class="new__card swiper-slide">
                            <img src="assets/img/นำสินประกันภัย.png" alt="" class="new__img">
                            <h3 class="insurance_title">นำสินประกันภัย</h3>
                            <form><input type='submit' class='btn btn-primary  ' value='เลือก' formaction='https://namsengins.co.th/ประกันภัยขนส่งสินค้า/'></form>


                        </article>
                        <article class="new__card swiper-slide">
                            <img src="assets/img/ประกันคุ้มภัย.jpg" alt="" class="new__img">
                            <h3 class="insurance_title">ประกันคุ้มภัย</h3>
                            <form><input type='submit' class='btn btn-primary  ' value='เลือก' formaction='https://www.tokiomarine.com/th/th-general/home/commercial/marine/marine-cargo-inland-cargo-policy.html'></form>


                        </article>
                        <article class="new__card swiper-slide">
                            <img src="assets/img/แอกซ่าประกันภัย.png" alt="" class="new__img">
                            <h3 class="insurance_title">แอกซ่าประกันภัย</h3>
                            <form><input type='submit' class='btn btn-primary  ' value='เลือก' formaction='https://www.axa.co.th/th/marine-cargo-insurance'></form>


                        </article>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section>

        <!-- Modal -->
        <div class="modal fade" tabindex="-1" id="start_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" id="frm_product">
                    <div class="modal-header">
                        <h5 class="modal-title">รายละเอียดการจัดส่งสินค้า</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                        <div class="form-group">
                                <label for="inputState_start">ต้นทาง</label>
                                <select id="inputState_start" class="form-control" name ="inputState_start" required>
                                    <option selected>เลือกจังหวัด...</option>
                                    <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                    <option value="กระบี่">กระบี่ </option>
                                    <option value="กาญจนบุรี">กาญจนบุรี </option>
                                    <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                    <option value="กำแพงเพชร">กำแพงเพชร </option>
                                    <option value="ขอนแก่น">ขอนแก่น</option>
                                    <option value="จันทบุรี">จันทบุรี</option>
                                    <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                    <option value="ชัยนาท">ชัยนาท </option>
                                    <option value="ชัยภูมิ">ชัยภูมิ </option>
                                    <option value="ชุมพร">ชุมพร </option>
                                    <option value="ชลบุรี">ชลบุรี </option>
                                    <option value="เชียงใหม่">เชียงใหม่ </option>
                                    <option value="เชียงราย">เชียงราย </option>
                                    <option value="ตรัง">ตรัง </option>
                                    <option value="ตราด">ตราด </option>
                                    <option value="ตาก">ตาก </option>
                                    <option value="นครนายก">นครนายก </option>
                                    <option value="นครปฐม">นครปฐม </option>
                                    <option value="นครพนม">นครพนม </option>
                                    <option value="นครราชสีมา">นครราชสีมา </option>
                                    <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                    <option value="นครสวรรค์">นครสวรรค์ </option>
                                    <option value="นราธิวาส">นราธิวาส </option>
                                    <option value="น่าน">น่าน </option>
                                    <option value="นนทบุรี">นนทบุรี </option>
                                    <option value="บึงกาฬ">บึงกาฬ</option>
                                    <option value="บุรีรัมย์">บุรีรัมย์</option>
                                    <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                    <option value="ปทุมธานี">ปทุมธานี </option>
                                    <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                    <option value="ปัตตานี">ปัตตานี </option>
                                    <option value="พะเยา">พะเยา </option>
                                    <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                    <option value="พังงา">พังงา </option>
                                    <option value="พิจิตร">พิจิตร </option>
                                    <option value="พิษณุโลก">พิษณุโลก </option>
                                    <option value="เพชรบุรี">เพชรบุรี </option>
                                    <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                    <option value="แพร่">แพร่ </option>
                                    <option value="พัทลุง">พัทลุง </option>
                                    <option value="ภูเก็ต">ภูเก็ต </option>
                                    <option value="มหาสารคาม">มหาสารคาม </option>
                                    <option value="มุกดาหาร">มุกดาหาร </option>
                                    <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                    <option value="ยโสธร">ยโสธร </option>
                                    <option value="ยะลา">ยะลา </option>
                                    <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                    <option value="ระนอง">ระนอง </option>
                                    <option value="ระยอง">ระยอง </option>
                                    <option value="ราชบุรี">ราชบุรี</option>
                                    <option value="ลพบุรี">ลพบุรี </option>
                                    <option value="ลำปาง">ลำปาง </option>
                                    <option value="ลำพูน">ลำพูน </option>
                                    <option value="เลย">เลย </option>
                                    <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                    <option value="สกลนคร">สกลนคร</option>
                                    <option value="สงขลา">สงขลา </option>
                                    <option value="สมุทรสาคร">สมุทรสาคร </option>
                                    <option value="สมุทรปราการ">สมุทรปราการ </option>
                                    <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                    <option value="สระแก้ว">สระแก้ว </option>
                                    <option value="สระบุรี">สระบุรี </option>
                                    <option value="สิงห์บุรี">สิงห์บุรี </option>
                                    <option value="สุโขทัย">สุโขทัย </option>
                                    <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                    <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                    <option value="สุรินทร์">สุรินทร์ </option>
                                    <option value="สตูล">สตูล </option>
                                    <option value="หนองคาย">หนองคาย </option>
                                    <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                    <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                    <option value="อุดรธานี">อุดรธานี </option>
                                    <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                    <option value="อุทัยธานี">อุทัยธานี </option>
                                    <option value="อุบลราชธานี">อุบลราชธานี</option>
                                    <option value="อ่างทอง">อ่างทอง </option>
                                    <option value="อื่นๆ">อื่นๆ</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="inputState_end">ปลายทาง</label>
                                <select id="inputState_end" class="form-control" name ="inputState_end" required>
                                    <option selected>เลือกจังหวัด...</option>
                                    <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                    <option value="กระบี่">กระบี่ </option>
                                    <option value="กาญจนบุรี">กาญจนบุรี </option>
                                    <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                    <option value="กำแพงเพชร">กำแพงเพชร </option>
                                    <option value="ขอนแก่น">ขอนแก่น</option>
                                    <option value="จันทบุรี">จันทบุรี</option>
                                    <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                    <option value="ชัยนาท">ชัยนาท </option>
                                    <option value="ชัยภูมิ">ชัยภูมิ </option>
                                    <option value="ชุมพร">ชุมพร </option>
                                    <option value="ชลบุรี">ชลบุรี </option>
                                    <option value="เชียงใหม่">เชียงใหม่ </option>
                                    <option value="เชียงราย">เชียงราย </option>
                                    <option value="ตรัง">ตรัง </option>
                                    <option value="ตราด">ตราด </option>
                                    <option value="ตาก">ตาก </option>
                                    <option value="นครนายก">นครนายก </option>
                                    <option value="นครปฐม">นครปฐม </option>
                                    <option value="นครพนม">นครพนม </option>
                                    <option value="นครราชสีมา">นครราชสีมา </option>
                                    <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                    <option value="นครสวรรค์">นครสวรรค์ </option>
                                    <option value="นราธิวาส">นราธิวาส </option>
                                    <option value="น่าน">น่าน </option>
                                    <option value="นนทบุรี">นนทบุรี </option>
                                    <option value="บึงกาฬ">บึงกาฬ</option>
                                    <option value="บุรีรัมย์">บุรีรัมย์</option>
                                    <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                    <option value="ปทุมธานี">ปทุมธานี </option>
                                    <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                    <option value="ปัตตานี">ปัตตานี </option>
                                    <option value="พะเยา">พะเยา </option>
                                    <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                    <option value="พังงา">พังงา </option>
                                    <option value="พิจิตร">พิจิตร </option>
                                    <option value="พิษณุโลก">พิษณุโลก </option>
                                    <option value="เพชรบุรี">เพชรบุรี </option>
                                    <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                    <option value="แพร่">แพร่ </option>
                                    <option value="พัทลุง">พัทลุง </option>
                                    <option value="ภูเก็ต">ภูเก็ต </option>
                                    <option value="มหาสารคาม">มหาสารคาม </option>
                                    <option value="มุกดาหาร">มุกดาหาร </option>
                                    <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                    <option value="ยโสธร">ยโสธร </option>
                                    <option value="ยะลา">ยะลา </option>
                                    <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                    <option value="ระนอง">ระนอง </option>
                                    <option value="ระยอง">ระยอง </option>
                                    <option value="ราชบุรี">ราชบุรี</option>
                                    <option value="ลพบุรี">ลพบุรี </option>
                                    <option value="ลำปาง">ลำปาง </option>
                                    <option value="ลำพูน">ลำพูน </option>
                                    <option value="เลย">เลย </option>
                                    <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                    <option value="สกลนคร">สกลนคร</option>
                                    <option value="สงขลา">สงขลา </option>
                                    <option value="สมุทรสาคร">สมุทรสาคร </option>
                                    <option value="สมุทรปราการ">สมุทรปราการ </option>
                                    <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                    <option value="สระแก้ว">สระแก้ว </option>
                                    <option value="สระบุรี">สระบุรี </option>
                                    <option value="สิงห์บุรี">สิงห์บุรี </option>
                                    <option value="สุโขทัย">สุโขทัย </option>
                                    <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                    <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                    <option value="สุรินทร์">สุรินทร์ </option>
                                    <option value="สตูล">สตูล </option>
                                    <option value="หนองคาย">หนองคาย </option>
                                    <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                    <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                    <option value="อุดรธานี">อุดรธานี </option>
                                    <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                    <option value="อุทัยธานี">อุทัยธานี </option>
                                    <option value="อุบลราชธานี">อุบลราชธานี</option>
                                    <option value="อ่างทอง">อ่างทอง </option>
                                    <option value="อื่นๆ">อื่นๆ</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for=".....-text" class="col-form-label">ประเภทการจัดส่ง</label>
                                <input type="text" class="form-control" id="deliver_type" name="deliver_type" placeholder=" (ทางบก/ทางเรือ/ทางอากาศ)">
                            </div>

                            <div class="form-group type_product">
                                <label for="inputTypeproduct">ประเภทสินค้า</label>
                                <input type="text" id="inputTypeproduct" class="form-control" name = "inputTypeproduct">
                                <!-- <select id="inputTypeproduct" class="form-control" name = "inputTypeproduct"> -->
                                    <!-- <option selected>ประเภทสินค้า...</option> -->
                                <!-- </select> -->
                            </div>

                            <div class="form-group">
                                <label for=".....-text" class="col-form-label">ราคาสินค้าโดยประมาณ</label>
                                <input type="text" class="form-control" id="price_product" name="price" required>
                            </div>
                            <div class="form-group">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="justify-content-center">No.</th>
                                            <th class="justify-content-center">การแบ่งประเภทสินค้า</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        require_once 'config.php'; 
                                        $sql = "select * from product_type where product_id != 6 ";
                                        $result = mysqli_query($conn_proc, $sql);
                                        $num_rows = mysqli_num_rows($result);
                                        if ($num_rows > 0) {
                                            while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                                                // var_dump($row[0]);
                                                echo "<tr><th>".$row[0]."</th><td>".$row[1]."</td></tr>";
                                        
                                            }
                                        } else {
                                            echo "No result.";
                                        }
                                        include("close_conn.php");
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="btn-sub" value="submit" >Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">

            <div>
                <a href="#" class="footer__logo">
                    <img src="assets/img/nopic.jpg" alt="" class="footer__logo-img">
                    Insurance
                </a>

                <p class="footer__discription">
                    Thanks For looking this wevsite.
                </p>
            </div>

            <div>
                <h3 class="footer__title">Contact</h3>

                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Phone icon</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Facebook icon</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Phone icon</a>
                    </li>
                </ul>
            </div>

        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bxs-up-arrow scrollup__icon'></i>
    </a>


    <!--=============== SCROLL REVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            console.log("Function ready!");
            
            $("#frm_product").submit(function(e){
                console.log("information submit");
                event.preventDefault();
                $.ajax({
                    url: "information.php",
                    type: "POST",
                    data :$('form#frm_product').serialize(),
                    success: function(data) {
                            console.log("Success",data);
                            location.href = "request_company.php";
                            
                    },
                    error : function(data) {
                        console.log('An error occurred.');
                        console.log(data);
                    },
                });
            });
        });
    </script>

</body>

</html>