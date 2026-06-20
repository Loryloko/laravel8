<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\Log;
//use Throwable;

class PublicController extends Controller
{
    public  $users = [
        ['name' => 'Mario', 'surname' => 'Rossi', 'role' => 'Senior'],
        ['name' => 'Luigi', 'surname' => 'Verdi', 'role' => 'Junior'],
        ['name' => 'Giulia', 'surname' => 'Bianchi', 'role' => 'Manager'],
    ];
   public function homepage() {
    return view('welcome');
    }

    public function aboutUs() {
   
    return view('aboutUs', ['users' => $this->users]);
    }

    public function aboutUsDetail($name){
    foreach($this->users as $user){
        if ($name == $user['name']){
            return view('aboutUsDetail', ['user'=>$user]);
        }
    }
    }

    public function contacts() {
    return view('contacts');
    }

}
