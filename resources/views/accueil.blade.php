<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Simplon Burkina Faso</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')}}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('asset/accueil.css')}}">
  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

 
</head>

<body>
 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

  
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <div class="div1"><div class="bf1"><h2><span class="sp1">SIMPLON</span>
    <span class="sp2"> Burkina Faso</span></h2></div><div class:"bf2"><img src="assets/img/slide/bf.png" class="bf"> </div></div>
      </nav><!-- .nav-menu -->
<!--  
      <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div> -->
     
    </div>
  </header><!-- End Header -->




<!-- TEST -->

  <!-- ======= Header ======= -->
  <header id="headere" class="fixed-top">
    <div class="container d-flex align-items-center">

    <div class="diva"><img src="assets/img/slide/logo.jpg" class="logo"></div>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{route('accueil')}}">Accueil</a></li>

          <li class="drop-down"><a href="#">Formations</a>
            <ul>
              <li><a href="{{route('formation')}}">En cours</a></li>
            
             
              <li class="drop-down"><a href="#">Nos opportunites</a>
                <ul>
                  <li><a href="#">Development web</a></li>
                  <li><a href="#">Inteligence artificielle</a></li>
                  <li><a href="#">Infographie</a></li>
                  <li><a href="#">Marketing digital</a></li>
                  <li><a href="#">Informatique</a></li>
                </ul>
              </li>
            </ul>
          </li>
          
          
          <li><a href="Alumnis.blade.php">Alumnis</a></li>
          <li><a href="A propos.blade.php">A propos</a></li>
          
          <li class="drop-down"><a href="#">Admin</a>
            <ul>
              <li><a href="{{route('nouveau')}}">Nouveau Apprenant</a></li>
            
             
              <li class="drop-down"><a href="#">Nouvel Alumni</a></li>
              <li class="drop-down"><a href="#">Nouveau projet</a></li>
            </ul>
          </li>
        
          

        </ul>
      </nav><!-- .nav-menu -->
<!-- 
      <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <br><br><br><br><br><br>
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/im1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animated fadeInUp">
              <h2>Bienvenu sur<span>SIMPLON BURKINA</span></h2>
              <p>La fabrique au coeur du numerique</p>
              <div class="text-center"><a href="" class="btn-get-started">Lire plus</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animated fadeInUp">
              <h2>TRAVAIL-DISCIPLINE-SUCCES</h2>
              <p> Présent dans plus de 74 pays a travers le monde</p>
              <div class="text-center"><a href="" class="btn-get-started">Lire plus</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/im7.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animated fadeInUp">
              <h2>Decouvrez Nos opportunités / Actualite</h2>
              <p>Des formations gratuites sur les metiers du numerique</p>
              <div class="text-center"><a href="" class="btn-get-started">Lire plus</a></div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Notre particularite</strong></h2>
        </div>
        
        <div id="partg">
          <div class="col-lg-6" data-aos="fade-right">
                    
                      
                        <img src="assets/img/slide/im6.jpg" class="bf5"> 
                        </div>
          </div>
                  
                        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                            <p>
                           Simplon est une fabrique formant gratuitetement sur les metiers du numerique.L’initiative de la Fabrique 
                           numérique Simplon-AUF Ouaga
                            est le fruit d’un partenariat entre l’AUF, 
                           la société Simplon et l’Université Joseph Ki-Zerbo. 
                           Elle bénéficie de l’accompagnement du Ministère de l’Europe et des Affaires étrangères de la France 
                           et de la Fondation Société Générale.
                           Cette fabrique garde en elle des caracteres specifiques lui conférent son originalite:

                            </p>
                            <ul>
                            <li><i class="ri-check-double-line"></i> La methode de formation active et intensive</li>
                            <li><i class="ri-check-double-line"></i> La discipline-Le travail-le professionnalisme</li>
                            <li><i class="ri-check-double-line"></i>Une présence effective dans plus de 74 pays a travers le monde.</li>
                            </ul>
                            <p class="font-italic">
                            Chez Simplon, les opportunités de formations restent qualifiante et axées sur les metiers du numeriques.
                            </p>
                    
          </div>
        </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Des formations axées sur les metiers du numerique</strong></h2>
          <p>Decouvrez les grands domaines sur lesquels nous evoluons.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
              <svg class="bi bi-display" width="4em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M5.75 13.5c.167-.333.25-.833.25-1.5h4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75z"/>
  <path fill-rule="evenodd" d="M13.991 3H2c-.325 0-.502.078-.602.145a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z"/>
</svg>
                <i class="bi bi-display"></i>
              </div>
              <h4><a href="">Development Web</a></h4>
              <p>Cette formation vise a developer les competences des apprenant sur la programmation.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
              <svg class="bi bi-bag-fill" width="4em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M1 4h14v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4zm7-2.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/>
</svg>
                <i class="bi bi-bag-fill"></i>
              </div>
              <h4><a href="">Marketing Digital</a></h4>
              <p>Cette formation vise a developer les competences des apprenant sur la communication digitale des entreprises</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
              <svg class="bi bi-pie-chart-fill" width="4em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M15.985 8.5H8.207l-5.5 5.5a8 8 0 0 0 13.277-5.5zM2 13.292A8 8 0 0 1 7.5.015v7.778l-5.5 5.5zM8.5.015V7.5h7.485A8.001 8.001 0 0 0 8.5.015z"/>
</svg>
                <i class="bi bi-pie-chart-fill"></i>
              </div>
              <h4><a href="">Big Data</a></h4>
              <p>Cette formation vise a developer les competences des apprenant Sur la gestion de la base de donnée</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="bx bx-layer"></i>
              </div>
              <h4><a href="">Web Designer</a></h4>
              <p>Cette formation vise a developer les competences des apprenant sur la </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                </svg>
                <i class="bx bx-slideshow"></i>
              </div>
              <h4><a href="">Jeux Videos</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i class="bx bx-arch"></i>
              </div>
              <h4><a href="">Architecte Web</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Nos Evenements</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">tous les evenements</li>
              <li data-filter=".filter-app">Burkina Faso</li>
              <li data-filter=".filter-card">Afrique</li>
              <li data-filter=".filter-web">Monde</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/slide/eve1.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4></h4>
              <p>Burkina Faso</p>
              <a href="assets/img/slide/eve1.png" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/slide/eve6.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Monde</h4>
              <p>Monde</p>
              <a href="assets/img/slide/eve6.png" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/slide/eve4.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Burkina</h4>
              <p>Burkina Faso</p>
              <a href="assets/img/slide/eve4.png" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/slide/eve2.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Afrique</p>
              <a href="assets/img/slide/eve2.png" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/slide/eve5.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>W</h4>
              <p>Monde</p>
              <a href="assets/img/slide/eve5.png" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/slide/eve3.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App</h4>
              <p>Burkina Faso</p>
              <a href="assets/img/slide/eve3.png" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/slide/eve10.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card </h4>
              <p>Afrique</p>
              <a href="assets/img/slide/eve10.pngg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/slide/eve8.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Afrique</p>
              <a href="assets/img/slide/eve8.png" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/slide/eve7.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Monde</p>
              <a href="assets/img/slide/eve7.png" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nos partenaires</h2>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/slide/cc1.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/slide/cc2.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/slide/cc3.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/slide/cc4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/slide/cc5.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('assets/img/slide/cc6.png')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/slide/cc7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/slide/cc8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Clients Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Localisation</h3>
            <p>
           Simplon Burkina <br>
              Ouagadougou, CNEUF<br>
              Burkina Faso  <br><br>
              <strong>Phone:</strong> (+226)60050000<br>
              <strong>Email:</strong> simplon@gmail.co<br>
            </p>
          </div>
             <div class="col-lg-3 col-md-6 footer-links">
            <h4>A propos</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Histoire</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Decouvrez Frederic Bordeau</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Nos autres sites</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Nos partenaires</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Lien utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Formations</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Alumnis</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">A propos</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Souscrire à la newsletter</h4>
            <p></p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Souscrir" placeholder="Entrer votre mail">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>@2020</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
          Web site<a href="https://bootstrapmade.com/">Simplon Officiel</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>