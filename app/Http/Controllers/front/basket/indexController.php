<?php

namespace App\Http\Controllers\front\basket;

use App\Helper\sepetHelper;
use App\Http\Controllers\Controller;
use App\Models\Kitaplar;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class indexController extends Controller
{

    public function index()
    {
        return view('front.basket.index');
    }


    public function add($id){
        $c = Kitaplar::where('id','=',$id)->count();
        if ($c!=0){
            $w = Kitaplar::where('id','=',$id)->get();
            sepetHelper::add($id,$w[0]['fiyat'],asset($w[0]['image']),$w[0]['name']);
            return redirect()->back()->with('status','Ürün başarıyla sepete eklendi');
        }
        else{
            return redirect()->route('index');
        }

    }
}
