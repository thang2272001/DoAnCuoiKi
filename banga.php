

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoc HTML</title>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" href="./assets/css/channel.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>


<body>
    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">
                    <img class="img__logo" src="./assets/img/Logo-Food.png" alt="ảnh food">
                </a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#services" class="nav__link">Services</a></li>
                        <li class="nav__item"><a href="#menu" class="nav__link">Menu</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact us</a></li>

                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

<!-- main -->
    <div class="bg-dark">
        <div class="channel">
            <div class="section p-y-50">
                <div class="row">
                    <div class="col-stretch p col-6">
                        <h1 class="big-title">ORDER<br>NOW</h1>
                    </div>
                    <div class="col-stretch p col-6">
                        <p class="m-t-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non exercitationem facere numquam repellendus aperiam sit laudantium, velit expedita quod odio.</p>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="part">
                    <a href="#" class="view">
                        <span>View all <span>&#x27F6;</span></span>
                    </a>
                    <h2 class="part-title">Featured Events</h2>

                    <div class="row">
                        <div class="col-4 p">
                            <a href="#" class="card">
                                <div class="card-header p row jus-between">
                                    <div>
                                        <span>Judo</span>
                                    </div>
                                    <div>
                                        <img class="img-channel"
                                            src="https://img.olympicchannel.com/images/image/private/t_1-1_150/f_auto/v1538355600/primary/ihakfgcljiaqras9f37t"
                                            alt="Day la anh">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="entry p">
                                        <span class="leading-1 d-block p">25 - 26 Sep</span>
                                        <span class="leading-3 d-block p">Grand Prix - Zagreb</span>
                                    </div>
                                    <div class="img">
                                        <img src="https://kfcvietnam.com.vn/uploads/combo/f7e98746a52f1e24dbbe663be0ade3e0.jpg"
                                            alt="Day la anh">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 p">
                            <a href="#" class="card">
                                <div class="card-header p row jus-between">
                                    <div>
                                        <span>Judo</span>
                                    </div>
                                    <div>
                                        <img class="img-channel"
                                            src="https://img.olympicchannel.com/images/image/private/t_1-1_150/f_auto/v1538355600/primary/ihakfgcljiaqras9f37t"
                                            alt="Day la anh">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="entry p">
                                        <span class="leading-1 d-block p">25 - 26 Sep</span>
                                        <span class="leading-3 d-block p">Grand Prix - Zagreb</span>
                                    </div>
                                    <div class="img">
                                        <img class="img-channel"
                                            src="https://kfcvietnam.com.vn/uploads/combo/f7e98746a52f1e24dbbe663be0ade3e0.jpg"
                                            alt="Day la anh">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 p">
                            <a href="#" class="card">
                                <div class="card-header p row jus-between">
                                    <div>
                                        <span>Judo</span>
                                    </div>
                                    <div>
                                        <img class="img-channel"
                                            src="https://img.olympicchannel.com/images/image/private/t_1-1_150/f_auto/v1538355600/primary/ihakfgcljiaqras9f37t"
                                            alt="Day la anh">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="entry p">
                                        <span class="leading-1 d-block p">25 - 26 Sep</span>
                                        <span class="leading-3 d-block p">Grand Prix - Zagreb</span>
                                    </div>
                                    <div class="img">
                                        <img class="img-channel"
                                            src="https://kfcvietnam.com.vn/uploads/combo/f7e98746a52f1e24dbbe663be0ade3e0.jpg"
                                            alt="Day la anh">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="part">
                    <h2 class="part-title">Originals in the spotlight</h2>
                    <div class="row line-1">
                        
                    
                        <?php
                            foreach ($hangsx as $hang) {
                                $monans = explode(',', $hang['mon_an']);
                        ?>

                            <div class="col-2 p">
                                <div class="card scaleOnHover">
                                    <div class="img">
                                        <img class="img-channel"
                                            src="https://kfcvietnam.com.vn/uploads/combo/f7e98746a52f1e24dbbe663be0ade3e0.jpg"
                                            alt="Day la anh">
                                    </div>
                                    <div class="body-menu">
                                        <h2 class="p-2"><?php echo $hang['combo'] ?></h2>
                                        <h2 class="p-2"><?php echo $hang['gia'] ?>Đ</h2>
                                        <ul class="ul-1">
                                            <?php                                          
                                                foreach ($monans as $mon) {
                                                    echo '<li class="l-menu">'.$mon.'</li>';
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="toggle">
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                    <div class="btn">
                                        <button>
                                            Đặt hàng
                                        </button>
                                    </div>
                                </div>
                            </div>


                        <?php
                            }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--========== FOOTER ==========-->
    <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">Thắng-Food</a>
                    <span class="footer__description">Restaurant</span>
                    <div>
                        <a href="https://www.facebook.com/thang.dz.227" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Dịch vụ</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Vận chuyển</a></li>
                        <li><a href="#" class="footer__link">Định giá</a></li>
                        <li><a href="#" class="footer__link">Đồ ăn nhanh</a></li>
                        <li><a href="#" class="footer__link">Đặt chỗ của bạn</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Thông tin</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Sự kiện</a></li>
                        <li><a href="#" class="footer__link">Liên hệ chúng tôi</a></li>
                        <li><a href="#" class="footer__link">Chính sách bảo mật</a></li>
                        <li><a href="#" class="footer__link">Điều khoản dịch vụ</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Địa chỉ liên hệ</h3>
                    <ul>
                        <li>Nguyễn Hữu Thắng</li>
                        <li></li>
                        <li>0904683503</li>
                        <li>thang2272001@gmail.com</li>
                    </ul>
                </div>
            </div>

            <p class="footer__copy">&#169; 2021 NGUYỄN HỮU THẮNG. All right reserved</p>
        </footer>
    <script src="channel.js"></script>
</body>

</html>