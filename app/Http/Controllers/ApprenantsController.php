<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apprenants;

class ApprenantsController extends Controller
{
    



    private $apprenants;


    function __construct(Apprenants $apprenants){
    $this->apprenants=$apprenants;




    }
    
    public function list( Apprenants $apprenants ){ 
$apprenants=Apprenants::get();
        return view('apprenant.list', compact('apprenants'));

        
    }

    public function new(){

    return view('apprenant.form');

    }
    public function store( Apprenants $apprenants){

        $data=request()->validate([
            'nom'=> ['required','string'],
            'prenom'=> ['required','string'],
            'date_naiss'=> ['required','string'],
            'ville_origine'=> ['required','string'],
            'formation'=> ['required','string'],
            'contact'=> ['required','integer'], 
            'photo'=> ['required','image'],
           
          ]);
  
          $data['updated']=null;
          $imagePath=request('photo')->store('uploads','public');
  
          $apprenants=Apprenants::create([
              
              'nom'=>$data[ 'nom'],
            'prenom'=> $data['prenom'],
            'date_naiss'=> $data['date_naiss'],
            'ville_origine'=> $data['ville_origine'],
            'formation'=> $data['formation'],
            'contact'=> $data['contact'], 
              'photo'=>$imagePath,
          ]);
     
  
          return redirect()->route('formation');
    }
    public function details(string $nom,string $prenom, int $id){

     
     $apprenant=$this->apprenants->where('id',$id)->get();
   
    
       return view('apprenant.details',compact('apprenant'));
    }
}
