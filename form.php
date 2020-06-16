<?php
session_start();
include 'verificar_login.php';
?>

<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>form
        
    </title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">

    
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <div class="body_bg">
        <!--::header part start::-->
        <header class="main_menu single_page_menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>  <!--- img logo-->
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="menu_icon"><i class="fas fa-bars"></i></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="fighter.html"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="team.html"></a>
                                    </li>
                               
                             
                                </ul>
                            </div>
                            <a href="index.php" class="btn_1 d-none d-sm-block">VOLTAR</a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header part end-->

        <!-- banner part start-->
        <section class="">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-8">
                        <div class="banner_text">
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner part start-->

        <!--::client logo part end::-->
        
        <!--::client logo part end::-->

        <!-- Aqui voce tem duas opcoes-->
        <link href="./form_files/css" rel="stylesheet">

        <link href="./form_files/main.css" rel="stylesheet" media="all">
        </head>
        <body>
        <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
        <div class="card card-6">
        <div class="card-heading">
        
        <h2 class="title">Indicar Lutador</h2>
        </div>
        
        <div class="card-body">
        
          <form action="./votar_lutador.php" method="POST">
        <div class="form-row">
        <div id="nome" class="name">Nome do Lutador</div>
        <div class="value">
        <input class="input--style-6" type="text" name="nome" autocomplete="off" required>
        </div>
        </div>
        
        <div class="form-row">
          <div class="name">Nota</div> 
          <div class="value">
          <div class="input-group">
            <input class="input--style-6" type="number" name="nota" min="0" max="10" autocomplete="off" required> 
          </div>
          </div>
          </div>
        
          <div class="form-row">
            <div class="name">Semestre</div> 
            <div class="value">
            <div class="input-group">
              <input class="input--style-6" type="number" name="mes" min="1" max="2" autocomplete="off" required> 
            </div>
            </div>
            </div>
            
        </div>
        <div class="card-footer">
        <button class="btn btn-dark" type="submit" name="submit">Votar</button>
        
        </form>
        
        </div>
        </div>
        </div>
        </div>
        
        <script type="text/javascript" async="" src="./form_files/analytics.js.download"></script><script src="./form_files/jquery.min.js.download" type="text/javascript"></script>
        
        <script src="./form_files/global.js.download" type="text/javascript"></script>
        
        <script async="" src="./form_files/js" type="text/javascript"></script>
        <script type="text/javascript">
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-23581568-13');
        </script>
        
        
        <style>.GSm1yl5YohaAR5tByUDB { color:#2e2e2e !important; } 
        .GSm1yl5YohaAR5tByUDB.ba-outline { outline-color:#2e2e2e } 
        .GSm1yl5YohaAR5tByUDB.Iehc4j0Dhyuy:hover, .GSm1yl5YohaAR5tByUDB.Iehc4j0Dhyuy.active { color:#6e2424 !important; }
        .jWjoLE1IyCTaAQ3JsQ { background-color:#2e2e2e !important; }
        .jWjoLE1IyCTaAQ3JsQ.Iehc4j0Dhyuy:hover, .jWjoLE1IyCTaAQ3JsQ.Iehc4j0Dhyuy.active { background:#6e2424 !important; }
        .ba-border-primary { border-color:#6e2424 !important }
        .c00tqofrnwA1D9jWco { background:#6e2424 !important; color:white !important; }
        .c00tqofrnwA1D9jWco.Iehc4j0Dhyuy:hover, .c00tqofrnwA1D9jWco.Iehc4j0Dhyuy.active { background:#6e2424 !important; }
        .ba-color-secondary { color:#6e2424 !important;  }
        .ba-color-secondary.Iehc4j0Dhyuy:hover, .ba-color-secondary.Iehc4j0Dhyuy.active { color:#6e2424 !important; }
        .ba-color-tertiary { color:#b32222 !important }
        .ba-color-tertiary.Iehc4j0Dhyuy:hover, .ba-color-tertiary.Iehc4j0Dhyuy.active { color:#420f0f !important }
        .yHefS0vxHyCEs6i { background:#b32222 !important }
        .ba-bg-tertiary.Iehc4j0Dhyuy:hover, .ba-bg-tertiary.Iehc4j0Dhyuy.active { background:#420f0f !important }</style></body><evlist></evlist>


        <!--::footer_part start::-->
        <footer class="footer_part">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="single_footer_part">
                                
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="single_footer_part">
                               
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="single_footer_part">
                               
                                <ul class="list-unstyled">
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="single_footer_part">
                                
                                <div id="mc_embed_signup">
                                    <form target="_blank"
                                        action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                        method="get" class="subscribe_form relative mail_part">
                                        <input type="email" name="email" id="newsletter-form-email"
                                            placeholder="Email Address" class="placeholder hide-on-focus"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = ' Email Address '">
                                        <button type="submit" name="submit" id="newsletter-submit"
                                            class="email_icon newsletter-submit button-contactForm"><i
                                                class="far fa-paper-plane"></i></button>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copygight_text">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="copyright_text">
                                <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer_icon social_icon">
                                <ul class="list-unstyled">
                                   
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--::footer_part end::-->
    </div>


    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>

