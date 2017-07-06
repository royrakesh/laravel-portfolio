<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class BlogController extends Controller
{
    // Get the Portfolios based on slug



    public function getIndex()
    {
       $portfolios = Portfolio::orderBy('created_at' , 'desc')->paginate(8);
       return view('blog.index')->withPortfolios($portfolios);
       
    }

    public function getSingle($slug)
    {

        $portfolios = Portfolio::where('slug', '=' , $slug)->first();

        return view('blog.single')->withPortfolios($portfolios);

    }

}
