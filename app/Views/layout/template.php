<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">

    <?php if (!empty($title) && $title != "") { ?>
        <title><?= $title; ?></title>
    <?php } else { ?>
        <title>CTrl Software - Software Akutansi dan Retail</title>
    <?php } ?>

    <link rel="canonical" href="<?= base_url('bootstrap_4_5/examples/sticky-footer-navbar') ?>">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('bootstrap_4_5/css/bootstrap.min.css') ?>" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!--====== Floating CSS ======-->
    <link rel="stylesheet" href="<?= base_url('/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/floatingaction.css') ?>">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="<?= base_url('/css/magnific-popup.css') ?>">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="<?= base_url('/css/slick.css') ?>">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="<?= base_url('/css/LineIcons.css') ?>">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?= base_url('/css/default.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/style.css') ?>">
    <script src="<?= base_url('js/jquery-3.6.0.slim.min.js') ?>"></script>
    <script src="<?= base_url('bootstrap_4_5/js/bootstrap.bundle.min.js') ?>"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="<?= base_url('bootstrap_4_5/examples/sticky-footer-navbar/sticky-footer-navbar.css') ?>" rel="stylesheet">

    <script type="text/javascript">
        function whatsappClick() {
            var url = "http://api.whatsapp.com/send/?phone=6285159606023&text=Bolehkah+Saya+bertanya+mengenai+produk+dari+CTrlSoft?+Terima+kasih+...";
            //alert(url);
            var win = window.open(url, "_blank");
            win.focus();
        };
    </script>
</head>

<body class="d-flex flex-column h-100">
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">CTrlSoft.id</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <?php if (!empty($menu_home) && $menu_home == true) : ?>
                        <li class="nav-item active">
                        <?php else : ?>
                        <li class="nav-item">
                        <?php endif; ?>
                        <a class="nav-link" href="<?= base_url('home'); ?>">
                            <?php if (!empty($menu_home) && $menu_home == true) : ?>
                                Home <span class="sr-only">(current)</span>
                            <?php else : ?>
                                Home
                            <?php endif; ?>
                        </a>
                        </li>

                        <?php if (!empty($menu_download) && $menu_download == true) : ?>
                            <li class="nav-item active">
                            <?php else : ?>
                            <li class="nav-item">
                            <?php endif; ?>
                            <a class="nav-link" href="<?= base_url('download'); ?>">
                                <?php if (!empty($menu_download) && $menu_download == true) : ?>
                                    Download <span class="sr-only">(current)</span>
                                <?php else : ?>
                                    Download
                                <?php endif; ?>
                            </a>
                            </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">&copy; <?= date('Y') ?> CtrlSoft.id | Designed by CTrlSoftcomp</span>
        </div>
    </footer>
</body>

</html>