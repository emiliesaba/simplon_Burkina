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
                <div class="card-header">Enregistrer un alumini</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('alumni.store') }}" aria-label="{{ __('Register') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group ">
                            <label for="promotion" >Promotion</label>
                                   
                            
                                <input id="promotion" type="text" class="form-control  {{ $errors->has('promotion') ? ' is-invalid': ' ' }}" name="promotion" value="{{ old('promotion') }}"  autofocus>

                                @if ($errors->has('promotion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('promotion') }}</strong>
                                    </span>
                                @endif


                                
                            

                        </div>
                        <div class="form-group ">
                            <label for="prenom" >Fonction</label>

                            
                                <input id="fonction" type="text" class="form-control  {{ $errors->has('fonction') ? ' is-invalid': ' ' }}" name="fonction" value="{{ old('fonction') }}"  autofocus>

                                @if ($errors->has('fonction'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fonction') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="form-group ">
                            <label for=" entreprise_actuel" > Entreprise actuelle</label>

                            
                                <input id=" entreprise_actuel" type="text" class="form-control  {{ $errors->has('entreprise_actuel') ? ' is-invalid': ' ' }}" name="entreprise_actuel" value="{{ old('entreprise_actuel') }}"  autofocus>

                                @if ($errors->has('entreprise_actuel'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('entreprise_actuel') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="form-group ">
                            <label for="contact" >sectionez un apprenant</label>
                            <select name="id" class="form-control">
                            <option value="0" >chosir un apprenant</option>
                            <?php $i=0; ?>
                           @foreach($apprenants as $apprenant)
                           <?php $i++; ?>
                            <option value="{{$apprenant->id}}">{{$i}}. {{$apprenant->nom}} {{$apprenant->prenom}}</option>
                            @endforeach
                            </select>
                        
                                @if ($errors->has('id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id') }}</strong>
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