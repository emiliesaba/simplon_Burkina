<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumni;
use App\Apprenants;
class AlumniController extends Controller
{
        protected $alumni;
        protected $apprenants;

        function __construct(Apprenants  $apprenants, Alumni $alumni){
           $this->alumni=$alumni;
           $this->apprenants=$apprenants;
        }
        public function list(int $promotion){
           $alumnis=$this->alumni->where('promotion',$promotion)->get();

           foreach($alumnis as $alumni){

            $alumni['apprenant']=$this->apprenants->where('id',$alumni->id_apprenant)->get();
           }

           
         return view('alumni.list', compact('alumnis', 'promotion')); 

        }

        public function details(string $nom, string $prenom, string $promotion, int $id){

          $alumni=$this->alumni->where('id_alumni',$id)->get();

          $apprenant=$this->apprenants->where('id',$alumni[0]['id_apprenant'])->get();


 
           return view('alumni.details',compact('apprenant','alumni', 'promotion'));
        }
        
        




        public function new(){
            $apprenants=$this->apprenants->get();
            return view('alumni.form', compact('apprenants'));
        }



        public function store(){
            $data=request()->validate([
                'promotion'=> ['required','integer'],
                'fonction'=> ['required','string'],
                'entreprise_actuel'=> ['required','string'],
                'id'=> ['required','integer'],
                'contact'=> ['integer'], 
               
              ]);
              
              $apprenants=$this->alumni->create([
                'promotion'=>$data[ 'promotion'],
                'fonction'=> $data['fonction'],
                'entreprise_actuel'=> $data['entreprise_actuel'],
                'id_apprenant'=> $data['id'],
                'contact'=> $data['contact']
              ]);
         
      
              return redirect()->route('alumni',['promotion'=>$data['promotion']]);
        }
}
