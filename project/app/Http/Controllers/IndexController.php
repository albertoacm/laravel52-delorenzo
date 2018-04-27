<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index($lang = 'en'){

        App()->setLocale($lang);

        $lang = App()->getLocale();


        $home = DB::table('dlg_home')->get();

        $categories = DB::table('dlg_categorie')->where('id_parent',0)->orderBy('sort', 'asc')->get(); 
        //$categorieManager->getAll(array("id_parent"=>"0"), false);

        $news = DB::table('dlg_news')->where('titolo_en','<>','')->limit(6)->orderBy('id', 'desc')->get();

        $sliders = DB::table('dlg_sliders')->get();

        return view('index', ['home'=> $home[0], 'categorieRoot' => $categories, 'news' => $news, 'sliders' => $sliders, 'lang'=> $lang]);
    }
}
