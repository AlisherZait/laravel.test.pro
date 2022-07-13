<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class MainController extends Controller
{
    public function home(){
        $articles = new Articles();
        return view('home', ['articles' => $articles->orderBy('updated_at', 'desc')->take(6)->get()]);
//      return view('home');
    }

    public function articles(){
        $articles = new Articles();
        return view('articles', ['articles' => $articles->inRandomOrder()->get()]);
//      return view('articles', ['articles' => $articles->all()]);
    }

    public function article($id){
        $articles = new Articles();
        return view('article', ['data' => $articles->find($id)]);

    }
}
