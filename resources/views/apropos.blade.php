    @include('includes.head')
<br> <br> <br><br><br><br><br><br><br>
<div class="section-title"> 
      <h2 class="titrea"> A PROPOS DE SIMPLON BURKINA</strong></h2>
</div>
      <p class="titrea1"><span style="color:red";>Simplon Burkina  </strong></span>
         accueil en son sein des jeunes talentieux et des etudiants de plusieurs profils.</p>
        <div class=" container carte"> <a href="{{route('alumni',['promotion'=>2020])}}" class="buttona">Decouvrez les alumnis</a></div>
<section class=" container carte">
         
  <div class="section-title">
         <h2 class="titrea">QUI EST FREDERIC BARDEAU?</h2>
  </div>
  <div class="card cola" style="width: 30rem;">
  <div class="card-body">
  <img src="{{asset('assets/img/slide/apropos.png')}}" class="card-img-top" alt="...">
    <h5 class="card-title cola1">FREDERIC BARDEAU</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item cola2">est le président de SIMPLON CO.
Entrepreneur dynamique, il fait decouvrir au monde
entier la profondeur et la grandeur de son rêve.
LA FABRIQUE SIMPLON.</li>
  </ul>
 
</div>
</section>
 
  <main id="main">
<!-- ======= Our Clients Section ======= -->
<section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nos partenaires</h2>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('assets/img/slide/cc1.jpg')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('assets/img/slide/cc2.jpg')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('assets/img/slide/cc3.jpg')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('assets/img/slide/cc4.png')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('assets/img/slide/cc5.png')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('assets/img/slide/cc6.png')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('assets/img/slide/cc7.png')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{asset('assets/img/slide/cc8.png')}}" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Clients Section -->

  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  @include('includes.foot')