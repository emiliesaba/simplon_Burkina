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
      <!-- <a href="index.html" class="logo mr-auto"><img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->

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

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
  </header><!-- End Header -->
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Enregistrer un nouveau apprenant</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('apprenant.store') }}" aria-label="{{ __('Register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group ">
                            <label for="0" >Nom</label>

                            
                                <input id="nom" type="text" class="form-control  {{ $errors->has('nom') ? ' is-invalid': ' ' }}" name="nom" value="{{ old('nom') }}"  autofocus>

                                @if ($errors->has('nom'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                            

                        </div>
                        <div class="form-group ">
                            <label for="prenom" >Prenom</label>

                            
                                <input id="prenom" type="text" class="form-control  {{ $errors->has('prenom') ? ' is-invalid': ' ' }}" name="prenom" value="{{ old('prenom') }}"  autofocus>

                                @if ($errors->has('prenom'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="form-group ">
                            <label for=" date_naiss" > Date de naissance</label>

                            
                                <input id=" date_naiss" type="text" class="form-control  {{ $errors->has(' date_naiss') ? ' is-invalid': ' ' }}" name=" date_naiss" value="{{ old(' date_naiss') }}"  autofocus>

                                @if ($errors->has(' date_naiss'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first(' date_naiss') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="form-group ">
                            <label for=" ville_origine" > Ville d'origine</label>

                            
                                <input id=" ville_origine" type="text" class="form-control  {{ $errors->has(' ville_origine') ? ' is-invalid': ' ' }}" name=" ville_origine" value="{{ old(' ville_origine') }}"  autofocus>

                                @if ($errors->has(' ville_origine'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first(' ville_origine') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="form-group ">
                            <label for=" formation" > Formation</label>

                            
                                <input id=" formation" type="text" class="form-control  {{ $errors->has(' formation') ? ' is-invalid': ' ' }}" name=" formation" value="{{ old(' formation') }}"  autofocus>

                                @if ($errors->has(' formation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first(' formation') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="form-group ">
                            <label for="contact" >Contact</label>

                            
                                <input id="contact" type="text" class="form-control  {{ $errors->has('contact') ? ' is-invalid': ' ' }}" name="contact" value="{{ old('contact') }}"  autofocus>

                                @if ($errors->has('contact'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="form-group">
                        
                            <div class="custom-file">
                                <input type="file" name="photo"  class="custom-file-input {{ $errors->has('photo') ? ' is-invalid': ' ' }}" id="validatedCustomFile">
                                <label class="custom-file-label" for="validatedCustomFile">Choisir une photo...</label>
                                @if ($errors->has('photo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                        </div>
                            
                                <button type="submit" class="btn btn-primary">
                                    Enregistrer
                                </button>
                            
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>