@include('includes.head')
<br><br><br><br> <br><br> 
<section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
      <h2 class="titre1">NOS ALUMNIS DE LA PROMOTION {{$promotion}} </strong></h2>
        <div class="row justify-content-center">
          @foreach($alumnis as $alumni)
    
    <div class="col-5 d-flex mt-4 mr-4 border">
     <div class="col-5"> 
     <img src="{{asset('storage').'/'.$alumni['apprenant'][0]['photo']}}" class="card-img rounded-circle h-100 w-100" alt="...">
     </div>
     <div class="Col-5 mt-4 mb-3">
     <h5 class="card-title"><strong>{{$alumni['apprenant'][0]['nom']}} {{$alumni['apprenant'][0]['prenom']}}</strong></h5>
     <h6><p class="card-text"><strong>Promotion       :</strong>{{$alumni->promotion}}</p></h6>
        <h6><p class="card-text"><strong>Fonction       :</strong>{{$alumni->fonction}}</p></h6>
        <h6><p class="card-text"><strong>Entreprise actuelle       :</strong>{{$alumni->entreprise_actuel}}</p></h6>
        <h6><p class="card-text"><strong>Contact         : </strong>{{$alumni->contact}}</p></h6>
        <a class="btn btn-danger " href="{{route('alumni.details',['id'=>$alumni->id_lumni,'nom'=>$alumni['apprenant'][0]['nom'],'prenom'=>$alumni['apprenant'][0]['prenom'],'promotion'=>$promotion])}}">Details</a>
     </div>
     </div>
    
@endforeach 
 </div>
 </div>
    </section>



@include('includes.foot')