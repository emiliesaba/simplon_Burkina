@include('includes.head')
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
                <div class="card-header">Enregistrer un Projet</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('apprenant.store') }}" aria-label="{{ __('Register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group ">
                            <label for="0" >Titre du projet </label>

                            
                                <input id="titre" type="text" class="form-control  {{ $errors->has('titre') ? ' is-invalid': ' ' }}" name="titre" value="{{ old('titre') }}"  autofocus>

                                @if ($errors->has('titre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('titre') }}</strong>
                                    </span>
                                @endif
                            

                        </div>
                        <div class="form-group ">
                            <label for="prenom" >Lien Github</label>

                            
                                <input id="lien" type="text" class="form-control  {{ $errors->has('lien') ? ' is-invalid': ' ' }}" name="lien" value="{{ old('lien') }}"  autofocus>

                                @if ($errors->has('lien'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lien') }}</strong>
                                    </span>
                                @endif
                            
                        </div>   
                                <button type="submit" class="btn btn-primary">
                                    Valider
                                </button>
                            
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- ======= Footer ======= -->
  @include('includes.foot')