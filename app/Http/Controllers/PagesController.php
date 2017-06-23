<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PagesController extends Controller
{
    public function getIndex(){
        // load the index Page

        $portfolios = Portfolio::orderBy('created_at', 'desc')->limit(4)->get();

        return view('pages.welcome')->withPortfolios($portfolios);
    }



    public function getContact(){

        return view('pages.contact');
    }


    public function getAbout(){
        return view('pages.about');
    }
}
