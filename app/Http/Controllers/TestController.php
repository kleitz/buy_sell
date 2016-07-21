<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){
        $catagorys = DB::table('products')->select('p_category')->groupBy('p_category')->get();


        $manProduct = DB::table('products')->where('p_category', '=', 'man')->get();

        $womanProduct = DB::table('products')->where('p_category', '=', 'woman')->get();
        //dd($womanProduct);
        $kidmanProduct = DB::table('products')->where('p_category', '=', 'kid')->get();
        $allProduct = DB::table('products')->where('p_category', '=', 'all')->get();

        return view('home.home', ['catagory_name' => $catagorys, 'mans'=>$manProduct, 'womans'=>$womanProduct,

                                    'kids'=> $kidmanProduct, 'alls'=>$allProduct]);
    }
}
