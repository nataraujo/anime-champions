<?php
          session_start();
      include 'verificar_login.php';
      include_once("conexao.php");
     ?>



<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>index
        
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

    <div class="body_bg" id="topo">
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

                            <a href="logout.php" class="btn_1 d-none d-sm-block">SAIR</a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header part end-->

        <!-- banner part start-->
        <section class="">
            <div class="container" >
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
        <section class="about_us section_padding">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-5 col-lg-6 col-xl-6">
                        <div class="learning_img">
                            <img src="img/tobirama.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6 col-xl-5">
                        <div class="about_us_text">
                            <h2>Aqui você tem duas opções</h2>
                            <a href="#lutadores" class="btn_1">Lutadores</a>                         
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about_us part end-->

        <!--::about_us part start::-->
        <section class="live_stareams padding_bottom">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-2 offset-lg-2 offset-sm-1">
                        <div class="live_stareams_text">
                            <h2>youtube <br> Lutas</h2>
                            
                        </div>
                    </div>
                    <div class="col-md-7 offset-sm-1">
                        <div class="live_stareams_slide owl-carousel">
                            <div class="live_stareams_slide_img">
                                <img src="img/mg1.png" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube"
                                        href="https://www.youtube.com/watch?v=4yEm8XRIIbE"> <!--ashura-->
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/img2.jpg" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube"
                                        href="https://www.youtube.com/watch?v=5zU8htCuqW8"> <!--baki-->
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/img3.jpg" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube"
                                        href="https://www.youtube.com/watch?v=FUpza22te6g"> <!--saitama-->
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/img4.jpg" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube"
                                        href="https://www.youtube.com/watch?v=EeCrTPjgSNI"> <!--levi-->
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/img5.png" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube"
                                        href="https://www.youtube.com/watch?v=OSyKhqDsW14"> <!-- goku--->
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/img6.jpg" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube"
                                        href="https://www.youtube.com/watch?v=wK8FFkqJGck"><!-- riu--->
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/img7.png" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube"
                                        href="https://www.youtube.com/watch?v=CV7nWKnxVRQ"> <!-- kimetsu--->
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/img8.jpg" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube"
                                        href="https://www.youtube.com/watch?v=ptg9nLLlzfA"><!-- extra--->
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--::about_us part end::-->

        <!-- use sasu part end-->
        
        <!-- use sasu part end-->

        <!-- gallery_part part start-->
        <section class="gallery_part section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        <div class="section_tittle text-center" id="lutadores">
                            <h2 >Lutadores</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="gallery_part_item">
                            <div class="grid">
                                <div class="grid-sizer"></div>
                                <a href="img/gallery/img1.jpg"
                                    class="grid-item bg_img img-gal grid-item--height-1"
                                    style="background-image: url('img/gallery/img1.jpg')">
                                    <div class="single_gallery_item">
                                        <div class="single_gallery_item_iner">
                                            <div class="gallery_item_text">
                                                <i class="ti-zoom-in"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="img/gallery/img2.jpg" class="grid-item bg_img img-gal"
                                    style="background-image: url('img/gallery/img2.jpg')">
                                    <div class="single_gallery_item">
                                        <div class="single_gallery_item_iner">
                                            <div class="gallery_item_text">
                                                <i class="ti-zoom-in"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="img/gallery/img/gallery/img4.jfif" class="grid-item bg_img img-gal"
                                    style="background-image: url('img/gallery/img4.jfif')">
                                    <div class="single_gallery_item">
                                        <div class="single_gallery_item_iner">
                                            <div class="gallery_item_text">
                                                <i class="ti-zoom-in"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="img/gallery/img5.jfif"
                                    class="grid-item bg_img img-gal grid-item--height-2"
                                    style="background-image: url('img/gallery/img5.jfif')">
                                    <div class="single_gallery_item">
                                        <div class="single_gallery_item_iner">
                                            <div class="gallery_item_text">
                                                <i class="ti-zoom-in"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="img/gallery/img/gallery/img3.jfif"
                                    class="grid-item bg_img img-gal grid-item--height-2"
                                    style="background-image: url('img/gallery/img3.jfif')">
                                    <div class="single_gallery_item">
                                        <div class="single_gallery_item_iner">
                                            <div class="gallery_item_text">
                                                <i class="ti-zoom-in"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="img/galleryimg6.jfif"
                                    class="grid-item bg_img img-gal grid-item--width-1"
                                    style="background-image: url('img/gallery/img6.jfif')">
                                    <div class="single_gallery_item">
                                        <div class="single_gallery_item_iner">
                                            <div class="gallery_item_text">
                                                <i class="ti-zoom-in"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="img/gallery/img7.jfif"
                                    class="grid-item bg_img img-gal sm_weight  grid-item--height-1"
                                    style="background-image: url('img/gallery/img7.jfif')">
                                    <div class="single_gallery_item">
                                        <div class="single_gallery_item_iner">
                                            <div class="gallery_item_text">
                                                <i class="ti-zoom-in"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery_part part end-->

        <!-- use sasu part end-->
       
        <!-- use sasu part end-->

        <!-- pricing part start-->
        <!-- Escolher lutador - lista 1-->
  <!-- form php-->

        <section class="pricing_part padding_top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section_tittle text-center">
                            <h2>Informações dos Lutadores </h2>
                        </div>
                    </div>
                </div>
               
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_pricing_part">
 <form action="votar.php">
                            <p>Baki the champion</p>
                            <h3>Baki</h3>
                            <ul>
                                <li>Artista marcial; Estudante; Lutador.</li>
                                <li>Altura: 1,78; Peso: 68kg</li>
                                <li>Características Físicas Sobre-Humanas, Super sentido</li>
                                <li>Regeneração, Resistência (Dolorosa,Venenosa e Mental)</li>
                                
                            </ul>

                            <?php
                            if(isset($_SESSION['msg'])){
                                //Imprimir o valor da sessão
                                echo $_SESSION['msg'];
                                //Destruir a sessão com PHP
                                unset($_SESSION['msg']);
                            }
	
    //Criar a QUERY para pesquisar os produtos no banco de dados
    $sql = "SELECT * FROM lutadores WHERE id IN (1)";
    //Executar a QUERY para pesquisar os produtos no banco de dados com o MySQLi
    $r_voto = mysqli_query($conexao, $sql);
    
    //Usar o while para percorrer os dados trazidos do banco de dados
    while($row_voto = mysqli_fetch_assoc($r_voto)){
     //Criar o link para o usuário poder votar no produto
     echo "Quantidade de voto:  " . $row_voto['nota'] . "<br>";
	
			//Criar o link para o usuário poder votar no produto
			echo "<a href='votar.php?id=".$row_voto['id']."'>Votar</a><br><hr>";
       
 }
?>
                           
                           
                    
                        </div>
                    </div>
</form>          
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_pricing_part">
<form action="votar.php">
                            <p>Kengan Ashura</p>
                            <h3>Ohma</h3>
                            <ul>
                                <li>Artista marcial; Praticante do estilo Niko.</li>
                                <li>Altura: 1,82 metros; Peso: 85 kg</li>
                                <li>Características Físicas Sobre-Humanas, Regeneração(Rank K)</li>
                                <li>Manipulação da Memória, Selamento</li>
                            </ul>
                            <?php
                            if(isset($_SESSION['msg'])){
                                //Imprimir o valor da sessão
                                echo $_SESSION['msg'];
                                //Destruir a sessão com PHP
                                unset($_SESSION['msg']);
                            }
	
    //Criar a QUERY para pesquisar o id do lutador no banco de dados
    $sql = "SELECT * FROM lutadores WHERE id IN (2)";
    //Executar a QUERY para pesquisar os lutadores no banco de dados com o MySQLi
    $r_voto = mysqli_query($conexao, $sql);
    
    //Usar o while para percorrer os dados trazidos do banco de dados
    while($row_voto = mysqli_fetch_assoc($r_voto)){
   
		//Imprimir a quantidade de votos que o produto tem salvo no banco de dados
        echo "Quantidade de voto:  " . $row_voto['nota'] . "<br>";
			//Criar o link para o usuário poder votar no produto
			echo "<a href='votar.php?id=".$row_voto['id']."'>Votar</a><br><hr>";
       
 }
?>   
                         
                        </div>
                    </div>
</form>  
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_pricing_part">
<form action="votar.php">                        
                            <p>Street Fighter</p>
                            <h3>Ryu</h3>
                            <ul>
                                <li>Lutador; Artista Marcial</li>
                                <li>Altura: 1,92 metros; Peso: 89 kg</li>
                                <li>Super Força, Resistência, Velocidade e Agilidade</li>
                                <li>Manipulação do Fogo e Eletricidade,capaz de realizar raciocínios frios e lógicos</li>
                            </ul>
                            <?php
                            if(isset($_SESSION['msg'])){
                                //Imprimir o valor da sessão
                                echo $_SESSION['msg'];
                                //Destruir a sessão com PHP
                                unset($_SESSION['msg']);
                            }
	
    //Criar a QUERY para pesquisar o id do lutador no banco de dados
    $sql = "SELECT * FROM lutadores WHERE id IN (3)";
    //Executar a QUERY para pesquisar os lutadores no banco de dados com o MySQLi
    $r_voto = mysqli_query($conexao, $sql);
    
    //Usar o while para percorrer os dados trazidos do banco de dados
    while($row_voto = mysqli_fetch_assoc($r_voto)){
		//Imprimir a quantidade de votos que o produto tem salvo no banco de dados
        echo "Quantidade de voto:  " . $row_voto['nota'] . "<br>";
			//Criar o link para o usuário poder votar no produto
			echo "<a href='votar.php?id=".$row_voto['id']."'>Votar</a><br><hr>";
       
 }
?>  
                           
                        </div>
                    </div>
                </div>
            </div>
</form>             
        </section>
        <!-- pricing part end-->
        
        <!-- Escolher lutador - lista 2-->
        <section class="pricing_part padding_top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section_tittle text-center">
                           
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_pricing_part">

<form action="votar.php">   
                            <p>Shingeki no Kyojin</p>
                            <h3>Levi Ackerman</h3>
                          
                            <ul>
                                <li>Capitão - Tropa de Exploração</li>
                                <li>Altura: 160; Peso: 65kg</li>
                                <li>Agilidade, alta resistência,Rank S,força física formidável</li>
                                <li> analizar situações e tomar decisões calculistas no calor da batalha</li>
                            </ul>
                            <?php
                             if(isset($_SESSION['msg'])){
                                //Imprimir o valor da sessão
                                echo $_SESSION['msg'];
                                //Destruir a sessão com PHP
                                unset($_SESSION['msg']);
                            }
	
    //Criar a QUERY para pesquisar o id do lutador no banco de dados
    $sql = "SELECT * FROM lutadores WHERE id IN (4)";
    //Executar a QUERY para pesquisar os lutadores no banco de dados com o MySQLi
    $r_voto = mysqli_query($conexao, $sql);
    
    //Usar o while para percorrer os dados trazidos do banco de dados
    while($row_voto = mysqli_fetch_assoc($r_voto)){
  
		//Imprimir a quantidade de votos que o produto tem salvo no banco de dados
        echo "Quantidade de voto:  " . $row_voto['nota'] . "<br>";
			//Criar o link para o usuário poder votar no produto
            echo "<a href='votar.php?id=".$row_voto['id']."'>Votar</a><br><hr>";
        }
        ?>
                           
                        </div>
                    </div>
  </form>                  
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_pricing_part">
<form action="votar.php">   
                            <p>One Puch man</p>
                             <h3>Saitama</h3>
                            <ul>
                                <li>Humano, Herói</li>
                                <li>Força Imensurável, Velocidade e Reflexos Imensuráveis</li>
                                <li>Vigor Infinito,entidos Sobrenaturais, Invulnerabilidade</li>
                                <li>Imunidade Psíquica, Negação, Velocidade da Luz, Estamina extremamente alta, e Classe B.</li>
                            </ul>
                            <?php
                             if(isset($_SESSION['msg'])){
                                //Imprimir o valor da sessão
                                echo $_SESSION['msg'];
                                //Destruir a sessão com PHP
                                unset($_SESSION['msg']);
                            }
	
    //Criar a QUERY para pesquisar o id do lutador no banco de dados
    $sql = "SELECT * FROM lutadores WHERE id IN (5)";
    //Executar a QUERY para pesquisar os lutadores no banco de dados com o MySQLi
    $r_voto = mysqli_query($conexao, $sql);
    
    //Usar o while para percorrer os dados trazidos do banco de dados
    while($row_voto = mysqli_fetch_assoc($r_voto)){
   
		//Imprimir a quantidade de votos que o produto tem salvo no banco de dados
        echo "Quantidade de voto:  " . $row_voto['nota'] . "<br>";
			//Criar o link para o usuário poder votar no produto
            echo "<a href='votar.php?id=".$row_voto['id']."'>Votar</a><br><hr>";
        }
        ?>
                        </div>
                    </div>
  </form>                    
                    <div class="col-lg-3 col-sm-6">
 
                        <div class="single_pricing_part">
 <form action="votar.php"> 
                            <p>Dragon Ball</p>
                            <h3>Goku</h3>
                            <ul>
                                <li>Saiyajin</li>
                                <li>Altura: 1,75; Peso:  62kg</li>
                                <li>Voar,Super Força,Velocidade: Massivamente Hipersônico, Mestre de Artes Marciais</li>
                                <li>Super Precisão, Percepção de Energia, Teletransporte,Super Punho do Dragão,várias transformações.</li>
                                
                            </ul>
                            <?php
                             if(isset($_SESSION['msg'])){
                                //Imprimir o valor da sessão
                                echo $_SESSION['msg'];
                                //Destruir a sessão com PHP
                                unset($_SESSION['msg']);
                            }
	
    //Criar a QUERY para pesquisar o id do lutador no banco de dados
    $sql = "SELECT * FROM lutadores WHERE id IN (6)";
    //Executar a QUERY para pesquisar os lutadores no banco de dados com o MySQLi
    $r_voto = mysqli_query($conexao, $sql);
    
    //Usar o while para percorrer os dados trazidos do banco de dados
    while($row_voto = mysqli_fetch_assoc($r_voto)){
   
		//Imprimir a quantidade de votos que o produto tem salvo no banco de dados
        echo "Quantidade de voto:  " . $row_voto['nota'] . "<br>";
			//Criar o link para o usuário poder votar no produto
            echo "<a href='votar.php?id=".$row_voto['id']."'>Votar</a><br><hr>";
        }
        ?>

                           
                          
                        </div>
                    </div>
                </div>
            </div>
 </form>           
        </section>



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
                                
                               
                                        <div class="mt-10 info">
                                        <div class="about_us_text">
                                        <a href="form.php" class="btn_1">Indicar lutadores</a>
                                        <br><br>
                                        </div>
                                    
                        <div class="col-md-7 col-lg-6 col-xl-5">
                        <div class="about_us_text">
                            <a href="#topo" class="btn_1">Topo</a>
                            
                           
                        </div>
                        <br><br>
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