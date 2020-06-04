<?php

use Illuminate\Database\Seeder;

class apprenants extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<11;$i++){
            Illuminate\Support\Facades\DB::table('apprenants')->insert([
             'nom'=>'johnDo'.$i,
             'prenom'=>'johnDo'.$i.'',
             'date_naiss'=>$i,
             'ville_origine' =>'ouaga'.$i.'',
             'formation' =>'dev'.$i.'',
             'contact' =>$i,
             'photo' =>'photo'.$i.''
            ]);
        }
    
    }
}
