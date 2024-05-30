<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageCon extends Controller
{
    //
    public $cards=[
        [
            'id'=>1,
            'name'=>'Mario',
            'surname'=>'Rossi',
            'email'=>'mariorossi@gmail.com',
            'role'=>'Admin',
            'image'=>'https://picsum.photos/id/1/200',
        ],
        [
            'id'=>2,
            'name'=>'Luca',
            'surname'=>'Verdi',
            'email'=>'lucaverdi@gmail.com',
            'role'=>'Tutor',
            'image'=>'https://picsum.photos/id/2/200',
        ],
        [
            'id'=>3,
            'name'=>'Nicola',
            'surname'=>'Bianchi',
            'email'=>'nicolabianchi@gmail.com',
            'role'=>'Admin',
            'image'=>'https://picsum.photos/id/3/200',
        ],
    ];
    public function homepage(){
        return view('homepage');
    }
    public function aboutUs(){
        return view('aboutus', ['cards'=>$this->cards]);
    }
    public function member($id){
        if(array_key_exists($id,$this->cards)){
        $member=$this->cards[$id];
        return view('member', compact('member'));
    }else{
        abort(404);
    }
}
}
