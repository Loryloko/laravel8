<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdottoRequest;
use App\Models\Prodotto;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController
{
    /*public $prodotti = [
        ['id'=>1, 'title'=> 'Bicchiere', 'marca'=>'asd', 'img'=> '/media/img/Bicchiere.jpg', 'materiale'=> 'ceramica'],
        ['id'=>2, 'title'=> 'Cornice', 'marca'=>'abc', 'img'=> '/media/img/Cornice.jpg', 'materiale'=> 'ceramica'],
        ['id'=>3, 'title'=> 'Piatto', 'marca'=>'lol', 'img'=> '/media/img/Piatto.jpg', 'materiale'=> 'ceramica'],
        ['id'=>4, 'title'=> 'Tavolo', 'marca'=>'xd', 'img'=> '/media/img/Tavolo.png', 'materiale'=> 'ceramica'],
        ['id'=>5, 'title'=> 'Vaso', 'marca'=>'gh', 'img'=> '/media/img/Vaso.jpg', 'materiale'=> 'ceramica'],
        ];*/
    
    public function __construct(){
        $this->middleware('auth')->except(['ListaProdotti']);
    }


    public function ListaProdotti(){
        $prodotti = Prodotto::all();
        return view('prodotti.prodotti',['prodotti'=>$prodotti]);
    }
    /*public function ProdottiDetail($id){
        foreach($this->prodotti as $prodotto){
            if($id == $prodotto['id']){
            return view('prodotti.prodotti-detail', ['prodotto' => $prodotto]);
            }
        }
    }*/

    public function create(){
        return view('prodotti.create');
    }

    public function store(ProdottoRequest $request){
        $prodotto = Prodotto::create([
            'title' => $request->title,
            'marca' => $request->marca,
            'materiale' => $request->materiale,
            'img' => $request->hasFile('img') ? $request->file('img')->store('images', 'public') : null
        ]);

        return redirect()->route('homepage')->with('successMessage', 'Hai correttamente caricato un articolo');
    }
}