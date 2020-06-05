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
 @include('includes.foot')