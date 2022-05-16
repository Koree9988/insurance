<?php session_start(); ?>
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
        <!-- HOME -->
        <section class="new section container" id="new">

    <!-- <?php echo($_SESSION['price']); echo($_SESSION['inputTypeproduct']); ?> -->

        <table class="table table-striped">
  <thead>
      <h4 class="row justify-content-center">กรมธรรม์ทั้งหมด</h4>
  </thead>
  <tbody>
    <?php
        include("config.php");
        $pro_id = $_SESSION["inputTypeproduct"];
        $price = $_SESSION["price"];
        $sql = "select c.company_name,c.company_link, d.cost ,d.insurance_amount_f
        FROM company c ,insurance_detail d
        WHERE EXISTS(SELECT d.company_id 
        WHERE (d.prod_id=".$pro_id." and (".$price." >=d.insurance_amount_i and ".$price." <=d.insurance_amount_f)  AND c.company_id = d.company_id) 
        OR( d.prod_id=6 AND (".$price." >=d.insurance_amount_i and ".$price." <=d.insurance_amount_f)  AND c.company_id = d.company_id))
        ORDER BY d.cost LIMIT 5";
        $result = mysqli_query($conn_proc, $sql);
        $num_rows = mysqli_num_rows($result);
        if ($num_rows > 0) {
            $row_count =1;
            while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                echo "<tr><th scope='row'>" . $row_count . "</th><td>" . $row[0] . "</td><td class='float-right'><form><button type='button' class='btn btn-dark mr-3' data-toggle='modal' data-target='#detail_modal'> รายละเอียด</button> <input type='submit' class='btn btn-success btn-md ' value='เลือก' formaction='".$row[1]."'></form> </td></tr>";
                $row_count = $row_count+1;
            }
        } else {
            echo "No result.";
        }
        include("close_conn.php");
    ?>
  </tbody>
</table>
        </section>

        <!-- Modal -->
        <div class="modal fade" tabindex="-1" id="detail_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" id="frm_product">
                    <div class="modal-header">
                        <h5 class="modal-title">รายละเอียดกรมธรรม์</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <!-- Fetch ข้อมูลตาม บริษัท -->
                        <H3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis saepe dolores iure amet corporis reprehenderit aspernatur magnam totam autem! Debitis laboriosam nisi corporis animi? Perferendis dignissimos voluptate sapiente dolorum praesentium.</H3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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


</body>

</html>