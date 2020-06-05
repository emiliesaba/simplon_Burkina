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
    <span class="sp2"> Burkina Faso</span></h2></div><div class:"bf2"><img src="{{asset('assets/img/slide/bf.png')}}" class="bf"> </div></div>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->




<!-- TEST -->

  <!-- ======= Header ======= -->
  <header id="headere" class="fixed-top">
    <div class="container d-flex align-items-center">

    <div class="diva"><img src="{{asset('assets/img/slide/logo.jpg')}}" class="logo"></div>
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
          
          
          <li class="drop-down"><a href="#">Alumni</a>
            <ul>
              <li><a href="{{route('alumni',['promotion'=>2020])}}">Promotion 2020</a></li>
              <li><a href="{{route('alumni',['promotion'=>2021])}}">Promotion 2021</a></li>
              <li><a href="{{route('alumni',['promotion'=>2022])}}">Promotion 2022</a></li>
            </ul>
          </li>
          <li><a href="{{route('apropos')}}">A propos</a></li>
          
          <li class="drop-down"><a href="#">Admin</a>
            <ul>
              <li><a href="{{route('nouveau.apprenant')}}">Enregistrer un Apprenant</a></li>
            
             
              <li class="drop-down"><a href="{{route('nouveau.alumni')}}"> Enregistrer un Alumni</a></li>
              <li class="drop-down"><a href="#">Enregistrer un Evenement</a></li>
              <li class="drop-down"><a href="#">Enregistrer une Actualité</a></li>
              <li class="drop-down"><a href="#">Enregistrer un Projet</a></li>
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
  </header>