<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>CTrl Software - Software Akutansi dan Retail</title>
    <meta name="google-site-verification" content="NgcE4Xx3IefHCNlbW4PncEPb7SqNDcKh7glyEus4nhQ" />

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="<?= base_url('/css/magnific-popup.css') ?>">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="<?= base_url('/css/slick.css') ?>">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="<?= base_url('/css/LineIcons.css') ?>">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?= base_url('/css/bootstrap.min.css') ?>">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?= base_url('/css/default.css') ?>">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?= base_url('/css/style.css') ?>">

    <!--====== Floating CSS ======-->
    <link rel="stylesheet" href="<?= base_url('/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/floatingaction.css') ?>">

    <!--====== Jquery js ======-->
    <script src="<?= base_url('/js/vendor/jquery-1.12.4.min.js') ?>"></script>
    <script src="<?= base_url('/js/vendor/modernizr-3.7.1.min.js') ?>"></script>

    <!--====== Bootstrap js ======-->
    <script src="<?= base_url('/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('/js/bootstrap.min.js') ?>"></script>

    <!--====== Slick js ======-->
    <script src="<?= base_url('/js/slick.min.js') ?>"></script>

    <!--====== Magnific Popup js ======-->
    <script src="<?= base_url('/js/jquery.magnific-popup.min.js') ?>"></script>

    <!--====== Ajax Contact js ======-->
    <script src="<?= base_url('/js/ajax-contact.js') ?>"></script>

    <!--====== Isotope js ======-->
    <script src="<?= base_url('/js/imagesloaded.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('/js/isotope.pkgd.min.js') ?>"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="<?= base_url('/js/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url('/js/scrolling-nav.js') ?>"></script>

    <!--====== Main js ======-->
    <script src="<?= base_url('/js/main.js') ?>"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script type="text/javascript">
        //===== Sticky
        $(window).on('scroll', function(event) {
            var scroll = $(window).scrollTop();
            if (scroll < 20) {
                $(".navbar-area").removeClass("sticky");
                $(".navbar-area img").attr("src", "<?= base_url('/uploads/logo.svg') ?>");
            } else {
                $(".navbar-area").addClass("sticky");
                $(".navbar-area img").attr("src", "<?= base_url('/uploads/logo-2.svg') ?>");
            }
        });

        function whatsappClick() {
            var url = "http://api.whatsapp.com/send/?phone=6285159606023&text=Bolehkah+Saya+bertanya+mengenai+produk+dari+CTrlSoft?+Terima+kasih+...";
            //alert(url);
            var win = window.open(url, "_blank");
            win.focus();
        };

        function whatsappModuleClick(modul) {
            var strModul = "";
            switch (modul) {
                case 1:
                    strModul = "Basic";
                    break;
                case 2:
                    strModul = "Pro";
                    break;
                case 3:
                    strModul = "Custom";
                    break;
                default:
                    strModul = "Enterprise";
                    break;
            }
            //alert(strModul)
            var url = "http://api.whatsapp.com/send/?phone=6285159606023&text=Hi+*CTrlSoft*,+Apa+yang+saya+dapatkan+dari+_Modul+" + strModul + "_+ini?+Terima+kasih+...";
            //alert(url);
            var win = window.open(url, "_blank");
            win.focus();
        };
    </script>
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">

                        <a class="navbar-brand" href="#">
                            <img src="<?= base_url('/uploads/logo-1.svg') ?>">
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active"><a class="page-scroll" href="#home">Beranda</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#portfolio">Fitur</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#pricing">Harga</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#about">Tentang</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#testimonial">Testimoni</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#contact">Hubungi</a></li>
                            </ul>
                        </div>

                        <div class="navbar-btn d-none d-sm-inline-block">
                            <ul>
                                <li><a class="solid" href="<?= base_url('download'); ?>">Download</a></li>
                            </ul>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->

    <!--====== SLIDER PART START ======-->

    <section id="home" class="slider_area">
        <div id="carouselThree" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselThree" data-slide-to="0" class="active"></li>
                <li data-target="#carouselThree" data-slide-to="1"></li>
                <li data-target="#carouselThree" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Bisnis retail itu sudah Digital</h1>
                                    <p class="text">Kami memadukan wawasan dan strategi untuk menciptakan Software Retail yang efisien, cepat, akurat dan mudah diakses dari mana saja kapan saja.</p>
                                    <ul class="slider-btn rounded-buttons">
                                        <li><a class="main-btn rounded-one" href="#pricing">GET STARTED</a></li>
                                        <li><a class="main-btn rounded-two" href="<?= base_url('download'); ?>">DOWNLOAD</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="<?= base_url('/uploads/slider/1.png') ?>" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Scale Up Bisnis anda ...</h1>
                                    <p class="text">Segera scale up bisnis anda, dan percayakan kepada Software kami. Kepuasan anda adalah dasar pedoman kami untuk membuat Produk Software ini.</p>
                                    <ul class="slider-btn rounded-buttons">
                                        <li><a class="main-btn rounded-one" href="#pricing">GET STARTED</a></li>
                                        <li><a class="main-btn rounded-two" href="<?= base_url('download'); ?>">DOWNLOAD</a></li>
                                    </ul>
                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="<?= base_url('/uploads/slider/2.png') ?>" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Dengan system Clouds ...</h1>
                                    <p class="text">Dengan system Clouds, begitu mudahnya anda mengakses data anda kapanpun dan dimanapun tanpa ada kekhawatiran akan data telat atau beda.</p>
                                    <ul class="slider-btn rounded-buttons">
                                        <li><a class="main-btn rounded-one" href="#pricing">GET STARTED</a></li>
                                        <li><a class="main-btn rounded-two" href="<?= base_url('download'); ?>">DOWNLOAD</a></li>
                                    </ul>
                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="<?= base_url('/uploads/slider/3.png') ?>" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->
            </div>

            <a class="carousel-control-prev" href="#carouselThree" role="button" data-slide="prev">
                <i class="lni lni-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#carouselThree" role="button" data-slide="next">
                <i class="lni lni-arrow-right"></i>
            </a>
        </div>
    </section>

    <!--====== SLIDER PART ENDS ======-->

    <!--====== FEATRES TWO PART START ======-->

    <section class="features-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Mengapa harus Menggunakan <span style="color:blue;">CTrlSoft</span>?</h3>
                        <p class="text">Komitmen kami adalah kepuasan anda, Software retail itu harus mudah dikontrol dan akurat agar mempermudah anda dalam pengambilan keputusan!</p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Akses cabang akan lebih mudah</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-network"></i>
                                <img class="shape" src="<?= base_url('/uploads/f-shape-1.svg') ?>" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Proses bisnis yang terintegrasi membuat laporan keuangan perusahaan Anda dapat dilihat secara real time sehingga sangat mudah dalam pengambilan keputusan bisnis.</p>
                            <!-- <a class="features-btn" href="#">LEARN MORE</a> -->
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Keamanan data jangan khawatir</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-shield"></i>
                                <img class="shape" src="<?= base_url('/uploads/f-shape-1.svg') ?>" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Percuma mati-matian genjot omset, kalau balapan sama kebocoran maling di dalam. Lindungi bisnis dengan CTrlSoft. Keluar masuk uang, barang, pembayaran semua terlacak dan tersaji detail.</p>
                            <!-- <a class="features-btn" href="#">LEARN MORE</a> -->
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Software Retail yang Modern dan Flexible</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-construction-hammer"></i>
                                <img class="shape" src="<?= base_url('/uploads/f-shape-1.svg') ?>" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Anda dapat mereka bentuk tampilan baik untuk tampilan Software dan faktur, semua transaksi hanya dengan menggunakan fasilitas desain dengan gaya tata letak menurut kehendak Anda.</p>
                            <!-- <a class="features-btn" href="#">LEARN MORE</a> -->
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Hak akses dapat diatur Flexible</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-users"></i>
                                <img class="shape" src="<?= base_url('/uploads/f-shape-1.svg') ?>" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Kewenangan akses setiap pengguna dapat diatur bahkan terdapat rekam jejak aktivitas sehingga risiko adanya penyalahgunaan data keuangan dapat dielakkan.</p>
                            <!-- <a class="features-btn" href="#">LEARN MORE</a> -->
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FEATRES TWO PART ENDS ======-->

    <!--====== PORTFOLIO PART START ======-->

    <section id="portfolio" class="portfolio-area portfolio-four pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Fitur Unggulan Kami</h3>
                        <p class="text">Berbagai keuntungan yang anda peroleh jika anda menggunakan CTrlSoft dalam bisnis anda</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="portfolio-menu text-center mt-50">
                        <ul>
                            <li data-filter="*" class="active">ALL WORK</li>
                            <li data-filter=".branding-4">BRANDING</li>
                            <li data-filter=".marketing-4">MARKETING</li>
                            <li data-filter=".planning-4">PLANNING</li>
                            <li data-filter=".research-4">RESEARCH</li>
                        </ul>
                    </div> <!-- portfolio menu -->
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row no-gutters grid mt-50">
                        <div class="col-lg-4 col-sm-6 branding-4 planning-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="<?= base_url('/uploads/portfolio/1.png') ?>" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="<?= base_url('/uploads/portfolio/1.png') ?>"><i class="lni lni-zoom-in"></i></a>
                                                <img src="<?= base_url('/uploads/portfolio/shape.svg') ?>" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="<?= base_url('/uploads/portfolio/shape.svg') ?>" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 marketing-4 research-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="<?= base_url('/uploads/portfolio/2.png') ?>" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">m
                                                <a class="image-popup" href="<?= base_url('/uploads/portfolio/2.png') ?>"><i class="lni lni-zoom-in"></i></a>
                                                <img src="<?= base_url('/uploads/portfolio/shape.svg') ?>" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="<?= base_url('/uploads/portfolio/shape.svg') ?>" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 branding-4 marketing-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="<?= base_url('/uploads/portfolio/3.png') ?>" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="<?= base_url('/uploads/portfolio/3.png') ?>"><i class="lni lni-zoom-in"></i></a>
                                                <img src="<?= base_url('/uploads/portfolio/shape.svg') ?>" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="<?= base_url('/uploads/portfolio/shape.svg') ?>" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 planning-4 research-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="<?= base_url('/uploads/portfolio/4.png') ?>" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="<?= base_url('/uploads/portfolio/4.png') ?>"><i class="lni lni-zoom-in"></i></a>
                                                <img src="<?= base_url('/uploads/portfolio/shape.svg') ?>" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="<?= base_url('/uploads/portfolio/shape.svg') ?>" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 marketing-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="<?= base_url('/uploads/portfolio/5.png') ?>" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="<?= base_url('/uploads/portfolio/5.png') ?>"><i class="lni lni-zoom-in"></i></a>
                                                <img src="<?= base_url('/uploads/portfolio/shape.svg') ?>" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="<?= base_url('/uploads/portfolio/shape.svg') ?>" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 planning-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="<?= base_url('/uploads/portfolio/6.png') ?>" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="<?= base_url('/uploads/portfolio/6.png') ?>"><i class="lni lni-zoom-in"></i></a>
                                                <img src="<?= base_url('/uploads/portfolio/shape.svg') ?>" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="<?= base_url('/uploads/portfolio/shape.svg') ?>" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 research-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="<?= base_url('/uploads/portfolio/7.png') ?>" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="<?= base_url('/uploads/portfolio/7.png') ?>"><i class="lni lni-zoom-in"></i></a>
                                                <img src="<?= base_url('/uploads/portfolio/shape.svg') ?>" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="<?= base_url('/uploads/portfolio/shape.svg') ?>" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 branding-4 planning-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="<?= base_url('/uploads/portfolio/8.png') ?>" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="<?= base_url('/uploads/portfolio/8.png') ?>"><i class="lni lni-zoom-in"></i></a>
                                                <img src="<?= base_url('/uploads/portfolio/shape.svg') ?>" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="<?= base_url('/uploads/portfolio/shape.svg') ?>" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 marketing-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="<?= base_url('/uploads/portfolio/9.png') ?>" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="<?= base_url('/uploads/portfolio/9.png') ?>"><i class="lni lni-zoom-in"></i></a>
                                                <img src="<?= base_url('/uploads/portfolio/shape.svg') ?>" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="<?= base_url('/uploads/portfolio/shape.svg') ?>" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PORTFOLIO PART ENDS ======-->

    <!--====== PRINICNG START ======-->

    <section id="pricing" class="pricing-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title text-center pb-25">
                        <h3 class="title">Paket dan Harga <span style="color:blue;">CTrlSoft</span></h3>
                        <p class="text">Kapan lagi anda membuang tenaga dan harapan hanya untuk data yang tidak realilable? Segera dapatkan <span style="color:blue;">CTrlSoft</span> Sekarang!</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style mt-30">
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Basic</h5>
                            <p class="month"><span class="price">Rp. 500,000</span></p>
                            <p class="month">per Unit</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni lni-check-mark-circle"></i> Dashboard Keuntungan Realtime</li>
                                <li><i class="lni lni-check-mark-circle"></i> Kontrol Persediaan</li>
                                <li><i class="lni lni-check-mark-circle"></i> Penjualan dan Pembelian</li>
                                <li><i class="lni lni-check-mark-circle"></i></li>
                                <li><i class="lni lni-check-mark-circle"></i></li>
                                <li><i class="lni lni-check-mark-circle"></i></li>
                                <li><i class="lni lni-check-mark-circle"></i></li>
                                <li><i class="lni lni-check-mark-circle"></i></li>
                                <li><i class="lni lni-check-mark-circle"></i></li>
                                <li><i class="lni lni-check-mark-circle"></i></li>
                                <li><i class="lni lni-check-mark-circle"></i></li>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <a class="main-btn rounded-one" href="javascript:whatsappModuleClick(1)">GET STARTED</a>
                        </div>
                    </div> <!-- pricing style one -->
                </div>

                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style mt-30">
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Pro</h5>
                            <p class="month"><span class="price">Rp. 750,000</span></p>
                            <p class="month">per Unit</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni lni-check-mark-circle"></i> Dashboard Keuntungan Realtime</li>
                                <li><i class="lni lni-check-mark-circle"></i> Kontrol Persediaan</li>
                                <li><i class="lni lni-check-mark-circle"></i> Kontrol Hutang dan Piutang</li>
                                <li><i class="lni lni-check-mark-circle"></i> Penjualan dan Pembelian</li>
                                <li><i class="lni lni-check-mark-circle"></i> Pelunasan Hutang dan Piutang</li>
                                <li><i class="lni lni-check-mark-circle"></i></li>
                                <li><i class="lni lni-check-mark-circle"></i></li>
                                <li><i class="lni lni-check-mark-circle"></i></li>
                                <li><i class="lni lni-check-mark-circle"></i></li>
                                <li><i class="lni lni-check-mark-circle"></i></li>
                                <li><i class="lni lni-check-mark-circle"></i></li>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <a class="main-btn rounded-one" href="javascript:whatsappModuleClick(2)">GET STARTED</a>
                        </div>
                    </div> <!-- pricing style one -->
                </div>

                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style mt-30">
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Enterprise</h5>
                            <p class="month"><span class="price">Rp. 1,250,000</span></p>
                            <p class="month">per Unit</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni lni-check-mark-circle"></i> Dashboard Keuntungan Realtime</li>
                                <li><i class="lni lni-check-mark-circle"></i> Kontrol Persediaan</li>
                                <li><i class="lni lni-check-mark-circle"></i> Kontrol Hutang dan Piutang</li>
                                <li><i class="lni lni-check-mark-circle"></i> Kontrol Kas Bank Harian</li>
                                <li><i class="lni lni-check-mark-circle"></i> Kontrol Fixed Assets</li>
                                <li><i class="lni lni-check-mark-circle"></i> Kontrol Laba Rugi Bersih</li>
                                <li><i class="lni lni-check-mark-circle"></i> Kontrol Neraca</li>
                                <li><i class="lni lni-check-mark-circle"></i> Penjualan dan Pembelian</li>
                                <li><i class="lni lni-check-mark-circle"></i> Pelunasan Hutang dan Piutang</li>
                                <li><i class="lni lni-check-mark-circle"></i> Kas dan Bank</li>
                                <li><i class="lni lni-check-mark-circle"></i> Rekonsiliasi Bank</li>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <a class="main-btn rounded-one" href="javascript:whatsappModuleClick(0)">GET STARTED</a>
                        </div>
                    </div> <!-- pricing style one -->
                </div>

                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style mt-30">
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Customize License</h5>
                            <p class="month"><span class="price">Call</span></p>
                            <p class="month">per Project</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni lni-check-mark-circle"></i> Silahkan langsung hubungi kami</li>
                                <li><i class="lni lni-check-mark-circle"></i> </li>
                                <li><i class="lni lni-check-mark-circle"></i> </li>
                                <li><i class="lni lni-check-mark-circle"></i> </li>
                                <li><i class="lni lni-check-mark-circle"></i> </li>
                                <li><i class="lni lni-check-mark-circle"></i> </li>
                                <li><i class="lni lni-check-mark-circle"></i> </li>
                                <li><i class="lni lni-check-mark-circle"></i> </li>
                                <li><i class="lni lni-check-mark-circle"></i> </li>
                                <li><i class="lni lni-check-mark-circle"></i> </li>
                                <li><i class="lni lni-check-mark-circle"></i> </li>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <a class="main-btn rounded-one" href="javascript:whatsappModuleClick(3)">GET STARTED</a>
                        </div>
                    </div> <!-- pricing style one -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PRINICNG ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="faq-content mt-45">
                        <div class="about-title">
                            <h6 class="sub-title">A Little More About Us</h6>
                            <h4 class="title">Frequently Asked Questions <br> About Our Site</h4>
                        </div> <!-- faq title -->
                        <div class="about-accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Frequently Asked Question One</a>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Frequently Asked Question Two</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Frequently Asked Question Three</a>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingFore">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFore" aria-expanded="false" aria-controls="collapseFore">Frequently Asked Question Four</a>
                                    </div>
                                    <div id="collapseFore" class="collapse" aria-labelledby="headingFore" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Frequently Asked Question Five</a>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                            </div>
                        </div> <!-- faq accordion -->
                    </div> <!-- faq content -->
                </div>
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="<?= base_url('/uploads/about.jpg') ?>" alt="about">
                    </div> <!-- faq image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->

    <section id="testimonial" class="testimonial-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-6">
                    <div class="testimonial-left-content mt-45">
                        <h6 class="sub-title">Testimonials</h6>
                        <h4 class="title">Apa yang klien kami Katakan, Tentang kami?</h4>
                        <ul class="testimonial-line">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <!--
                        <p class="text">Duis et metus et massa tempus lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas ultricies, orci molestie blandit interdum. <br> <br> ipsum ante pellentesque nisl, eget mollis turpis quam nec eros. ultricies, orci molestie blandit interdum.</p>
                        -->
                    </div> <!-- testimonial left content -->
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-right-content mt-50">
                        <div class="quota">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="testimonial-content-wrapper testimonial-active">
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“Tidak menyangka, Applikasi yang sangat membantu dalam pencatatan Penjualan Saya.”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-image">
                                            <img src="<?= base_url('/uploads/author-2.jpg') ?>" alt="author">
                                        </div>
                                        <div class="author-name media-body">
                                            <h5 class="name">Budi</h5>
                                            <span class="sub-title">Pemilik Kios Riverside</span>
                                        </div>
                                    </div>
                                    <div class="author-review">
                                        <ul class="star">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                        </ul>
                                        <span class="review">( 3 Reviews )</span>
                                    </div>
                                </div>
                            </div> <!-- single testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“Program simple dan Completed.”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-image">
                                            <img src="<?= base_url('/uploads/author-1.jpg') ?>" alt="author">
                                        </div>
                                        <div class="author-name media-body">
                                            <h5 class="name">Mr. Jems Bond</h5>
                                            <span class="sub-title">Pemilik Mbuild Firm</span>
                                        </div>
                                    </div>
                                    <div class="author-review">
                                        <ul class="star">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                        </ul>
                                        <span class="review">( 7 Reviews )</span>
                                    </div>
                                </div>
                            </div> <!-- single testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“Praesent scelerisque, odio eu fermentum malesuada, nisi arcu volutpat nisl, sit amet convallis nunc turp.”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-image">
                                            <img src="<?= base_url('/uploads/author-4.jpg') ?>" alt="author">
                                        </div>
                                        <div class="author-name media-body">
                                            <h5 class="name">Mr. Jems Bond</h5>
                                            <span class="sub-title">Pemilik Mbuild Firm</span>
                                        </div>
                                    </div>
                                    <div class="author-review">
                                        <ul class="star">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                        </ul>
                                        <span class="review">( 10 Reviews )</span>
                                    </div>
                                </div>
                            </div> <!-- single testimonial -->
                        </div> <!-- testimonial content wrapper -->
                    </div> <!-- testimonial right content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== TEAM START ======-->

    <!--
    <section id="team" class="team-area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Meet The Team</h3>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div> 
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="team-image">
                            <img src="assets/images/team-1.jpg" alt="Team">
                        </div>
                        <div class="team-content">
                            <div class="team-social">
                                <ul class="social">
                                    <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="team-name"><a href="#">Yanto Hariyono</a></h4>
                            <span class="sub-title">Owner and Developer Director</span>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="team-image">
                            <img src="assets/images/team-2.jpg" alt="Team">
                        </div>
                        <div class="team-content">
                            <div class="team-social">
                                <ul class="social">
                                    <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="team-name"><a href="#">Yusuf Ahmadi</a></h4>
                            <span class="sub-title">Co-Owner and Developer</span>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="team-image">
                            <img src="assets/images/team-3.jpg" alt="Team">
                        </div>
                        <div class="team-content">
                            <div class="team-social">
                                <ul class="social">
                                    <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="team-name"><a href="#">Cahyo Permadi</a></h4>
                            <span class="sub-title">UI/UX Designer</span>
                        </div>
                    </div> 
                </div>
            </div> 
        </div> 
    </section>
    -->
    <!--====== TEAM  ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Kunjungi Kantor Kami</h3>
                        <p class="text">Berhenti membuang waktu dan uang untuk merancang dan mengelola Sistem Retail atau Accounting yang tidak memberikan hasil.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-map mt-30">
                        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Krian+Sejahtera+Indah+Regency+Cluster+Bagus%2C+Gamping+Wetan%2C+Gamping%2C+Kabupaten+Sidoarjo%2C+Jawa+Timur=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="contact-info pt-30">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-1 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-map-marker"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">Perum. Krian Sejahtera Indah Cluster Bagus Blok B6-7,
                                    <br>Kota Sidoarjo - Kode Pos 60121
                                    <br>Jawa-Timur Indonesia
                                </p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-2 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-envelope"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">Marketing : <a href="mailto:marketing@ctrlsoft.id">marketing@ctrlsoft.id</a></p>
                                <p class="text">Support : <a href="mailto:support@ctrlsoft.id">support@ctrlsoft.id</a></p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-3 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-phone"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">Marketing 1 :
                                    <a href="tel:+6285159606023" class="list-item-link" target="_self" rel="noopener nofollow" aria-label="phone-volume">0851 5960 6023</a>
                                </p>
                                <p class="text">Marketing 2 :
                                    <a href="tel:+6281999334432" class="list-item-link" target="_self" rel="noopener nofollow" aria-label="phone-volume">0819 9933 4432</a>
                                </p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                </div> <!-- row -->
            </div> <!-- contact info -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper form-style-two pt-115">
                        <h4 class="contact-title pb-10"><i class="lni lni-envelope"></i> Tinggalkan <span>pesan anda.</span></h4>
                        <?php
                        if (!empty(session()->getFlashdata('success'))) { ?>
                            <div class="alert alert-success">
                                <?php echo session()->getFlashdata('success'); ?>
                            </div>
                        <?php }

                        if (!empty(session()->getFlashdata('error')) || !empty(session()->getFlashdata('errors'))) {
                            $errors = session()->getFlashdata('errors'); ?>
                            <div class="alert alert-danger">
                                Whoops! Ada kesalahan saat input data, yaitu:
                                <?php echo session()->getFlashdata('error'); ?>
                                <ul>
                                    <?php if ($errors != null) {
                                        foreach ($errors as $error) { ?>
                                            <li><?php echo esc($error); ?></li>
                                    <?php }
                                    } ?>
                                </ul>
                            </div>
                        <?php }
                        $inputs = session()->getFlashdata('inputs');
                        echo form_open(base_url('home/sendMail')); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-input mt-25">
                                    <label>Nama anda</label>
                                    <div class="input-items default">
                                        <?php
                                        $from = [
                                            'type'  => 'text',
                                            'name'  => 'from',
                                            'id'    => 'from',
                                            'value' => $inputs['from'],
                                            'class' => 'form-control',
                                            'placeholder' => 'Nama lengkap anda'
                                        ];
                                        echo form_input($from);
                                        ?>
                                        <!-- <input type="text" name="name" placeholder="Nama lengkap anda" required> -->
                                        <i class="lni lni-user"></i>
                                    </div>
                                </div> <!-- form input -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-input mt-25">
                                    <label>E-mail</label>
                                    <div class="input-items default">
                                        <?php
                                        $email = [
                                            'type'  => 'email',
                                            'name'  => 'email',
                                            'id'    => 'email',
                                            'value' => $inputs['email'],
                                            'class' => 'form-control',
                                            'placeholder' => 'E-mail'
                                        ];
                                        echo form_input($email);
                                        ?>
                                        <!-- <input type="email" name="email" placeholder="E-mail" required> -->
                                        <i class="lni lni-envelope"></i>
                                    </div>
                                </div> <!-- form input -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-input mt-25">
                                    <label>Subject</label>
                                    <div class="input-items default">
                                        <?php
                                        $subject = [
                                            'type'  => 'text',
                                            'name'  => 'subject',
                                            'id'    => 'subject',
                                            'value' => $inputs['subject'],
                                            'class' => 'form-control',
                                            'placeholder' => 'Subject'
                                        ];
                                        echo form_input($subject);
                                        ?>
                                        <!-- <input type="text" name="subject" placeholder="Subject"> -->
                                        <i class="lni lni-tag"></i>
                                    </div>
                                </div> <!-- form input -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-input mt-25">
                                    <label>Phone</label>
                                    <div class="input-items default">
                                        <?php
                                        $phone = [
                                            'type'  => 'tel',
                                            'name'  => 'phone',
                                            'id'    => 'phone',
                                            'value' => $inputs['phone'],
                                            'class' => 'form-control',
                                            'placeholder' => '0800-0000-0000',
                                            'pattern' => '[0][8][0-9]{2}-[0-9]{4}-[0-9]{4}'
                                        ];
                                        echo form_input($phone);
                                        ?>
                                        <!-- <input type="tel" name="phone" pattern="[0][8][0-9]{2}-[0-9]{4}-[0-9]{4}" placeholder="0812-3456-7891" required> -->
                                        <i class="lni lni-phone"></i>
                                    </div>
                                </div> <!-- form input -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-input mt-25">
                                    <label>Pesan</label>
                                    <div class="input-items default">
                                        <?php
                                        $message = [
                                            'type'  => 'tel',
                                            'name'  => 'message',
                                            'id'    => 'message',
                                            'value' => $inputs['message'],
                                            'class' => 'form-control',
                                            'placeholder' => 'Pesan'
                                        ];
                                        echo form_textarea($message);
                                        ?>
                                        <!-- <textarea name="message" placeholder="Pesan"></textarea> -->
                                        <i class="lni lni-pencil-alt"></i>
                                    </div>
                                </div> <!-- form input -->
                            </div>
                            <p class="form-message"></p>
                            <div class="col-md-12">
                                <div class="form-input mt-30">
                                    <div class="g-recaptcha" data-sitekey="6Ld66LccAAAAAHmD4zOwqH_Z7xIqI6fM1mTj1gPS"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-input light-rounded-buttons mt-30">
                                    <button type="submit" class="main-btn light-rounded-two">Send Message</button>
                                </div> <!-- form input -->
                            </div>
                        </div> <!-- row -->
                        </form>
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row justify-content">
                <div class="col-lg-4 col-md-6 mt-30">
                    <div class="footer-logo">
                        <a href="index.php"><img src="<?= base_url('/uploads/logo-1.svg') ?>"></a>
                    </div> <!-- footer logo -->
                    <div class="footer-about" style="color: #fff;">
                        <p class="text">Software Retail dan Accounting <strong>(CTrlSoft)</strong> dikembangkan untuk memenuhi permasalahan yang banyak didapatkan oleh Toko atau unit usaha dagang anda. Komitmen kami adalah kepuasan anda.</p>
                    </div>
                    <ul class="social mt-30">
                        <li><a href="https://www.facebook.com/ctrlsoft.id"><i class="lni lni-facebook-filled"></i></a></li>
                        <!--<li><a href="https://www.instagram.com/yanto_hariyono"><i class="lni lni-instagram-original"></i></a></li>-->
                        <li><a href="https://www.linkedin.com/in/yanto-hariyono-64b3a6a3"><i class="lni lni-linkedin-original"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCLyXkXP7lMHePI3Uf_wp_ZQ"><i class="lni lni-youtube"></i></a></li>
                    </ul> <!-- social -->
                </div>
                <div class="col-lg-4 col-md-6 mt-30">
                    <div class="footer-title" style="color: #fff;">
                        <p class="text" style="font-size: 22pt;">Hubungi Kami</p>
                    </div>
                    <div class="contact-info pt-30">
                        <div class="row">
                            <div class="single-contact-info contact-color-3 d-flex ">
                                <div class="contact-info-icon">
                                    <i class="lni lni-map-marker"></i>
                                </div>
                                <div class="contact-info-content media-body footer-caption">
                                    <p class="text">Perum. Krian Sejahtera Indah Cluster Bagus Blok B6-7,
                                        <br>Kota Sidoarjo - Kode Pos 60121
                                        <br>Jawa-Timur Indonesia
                                    </p>
                                </div>
                            </div> <!-- single contact info -->
                            <div class="single-contact-info contact-color-3 mt-30 d-flex ">
                                <div class="contact-info-icon">
                                    <i class="lni lni-phone"></i>
                                </div>
                                <div class="contact-info-content media-body footer-caption">
                                    <p class="text">Marketing 1 :
                                        <a href="tel:+6285159606023" class="list-item-link" target="_self" rel="noopener nofollow" aria-label="phone-volume">0851 5960 6023</a>
                                    </p>
                                    <p class="text">Marketing 2 :
                                        <a href="tel:+6281999334432" class="list-item-link" target="_self" rel="noopener nofollow" aria-label="phone-volume">0819 9933 4432</a>
                                    </p>
                                </div>
                            </div> <!-- single contact info -->
                            <div class="single-contact-info contact-color-3 mt-30 d-flex ">
                                <div class="contact-info-icon">
                                    <i class="lni lni-envelope"></i>
                                </div>
                                <div class="contact-info-content media-body footer-caption">
                                    <p class="text">Marketing : <a href="mailto:marketing@ctrlsoft.id">marketing@ctrlsoft.id</a></p>
                                    <p class="text">Support : <a href="mailto:support@ctrlsoft.id">support@ctrlsoft.id</a></p>
                                </div>
                            </div> <!-- single contact info -->
                        </div> <!-- row -->
                    </div> <!-- contact info -->
                </div>
                <div class="col-lg-4 col-md-6 mt-30">
                    <div class="footer-title" style="color: #fff;">
                        <p class="text" style="font-size: 22pt;">Tentang</p>
                    </div>

                    <div class="mt-30 footer-about">
                        <p class="text">Software Retail dan Accounting <strong>(CTrlSoft)</strong> dikembangkan untuk memenuhi permasalahan yang banyak didapatkan oleh Toko atau unit usaha dagang anda. Komitmen kami adalah kepuasan anda.</p>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section class="footer- footer-light">
        <div class="copyright text-center">
            <!-- <p class="text">&copy; <?= date('Y') ?> CtrlSoft.id | Designed by <a href="https://uideck.com" rel="nofollow">UIdeck</a> and Built-with <a rel="nofollow" href="https://ayroui.com">Ayro UI</a></p> -->
            <span class="text-muted">&copy; <?= date('Y') ?> CtrlSoft.id | Designed by CTrlSoftcomp</span>
        </div>
    </section>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>
    <a id="btnWhasApp" href="javascript:whatsappClick()" class="float">
        <i class="fa fa-whatsapp my-float"></i>
        <i style="font-size: small; vertical-align: middle;">Butuh Bantuan?</i>
    </a>
    <!-- 
        <a href="https://klikwa.net/ctrlsoft" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
        <i style="font-size: small; vertical-align: middle;">Butuh Bantuan?</i>
    </a> 
-->

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->


    <!--====== PART ENDS ======-->

    <script type="text/javascript">
        <?php /*
        $(document).ready(function() {
            //Send Message
            $('#btn_sendmessage').on('click', function() {
                alert("<?php echo base_url('home/googleCaptachStore') ?>");

                var email = $('#email').val();
                var name = $('#name').val();
                var subject = $('#subject').val();
                var phone = $('#phone').val();
                var message = $('#message').val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('home/googleCaptachStore') ?>",
                    dataType: "JSON",
                    data: {
                        email: email,
                        name: name,
                        subject: subject,
                        phone: phone,
                        message: message
                    },
                    success: function(data) {
                        $('[name="email"]').val("");
                        $('[name="name"]').val("");
                        $('[name="subject"]').val("");
                        $('[name="phone"]').val("");
                        $('[name="message"]').val("");
                    }
                });
                return false;
            });
        });
        */ ?>
    </script>
</body>

</html>