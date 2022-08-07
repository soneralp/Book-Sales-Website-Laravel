<?php

namespace App\Helper;
use Illuminate\Support\Facades\Session;
use App\Models\Kitaplar;
use App\Http\Controllers\front\basket\indexController;

class sepetHelper{

    static function add($id,$fiyat,$image,$name){
        $sepet = Session::get('basket');

        $array = [
            'id'=> $id,
            'name'=> $name,
            'image'=> $image,
            'fiyat'=> $fiyat,
        ];

        Session::put('basket.'.rand(1,90000),$array);
    }


    static function countData(){
        return count(sepetHelper::allList());
    }

    static function allList(){
        $x = Session::get('basket');
        return $x;
    }


    static function  totalPrice(){

     $data = self::allList();
      return collect($data)->sum('fiyat');

    }

    static function remove($id)
    {
        $s = Session::get('basket');
        Session::forget('basket.'.$id);
    }




}






