<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use Session;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $portfolios = Portfolio::orderBy('id', 'desc')->paginate(4);

        return view('portfolios.index')->withPortfolios($portfolios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('portfolios.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // Validate data

        $this->validate($request , array(

            'title' => 'required|max:255',
            'slug'  => 'required|alpha_dash|min:5|max:255|unique:portfolios,slug',
            'body'  => 'required'
        ));

        // Store data

        $portfolio = new Portfolio;

        $portfolio->title  = $request->title;
        $portfolio->slug   = $request->slug;
        $portfolio->body   = $request->body;

        $portfolio->save();

        Session :: flash('success','Portfolio Successfully created');
        
        // Redirect

        return redirect()->route('portfolios.show' , $portfolio->id);





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portfolio = Portfolio::find($id);

        return view('portfolios.show')->withPortfolio($portfolio);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

       $portfolio = Portfolio::find($id);

        return view('portfolios.edit')->withPortfolio($portfolio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //


         // Validate data
         $portfolio = Portfolio::find($id);

       if($request->input('slug') == $portfolio->slug ){

            $this->validate($request , array(

            'title' => 'required | max:255',
            'body'  => 'required'
        ));
           
       }else{
           
        $this->validate($request , array(

            'title' => 'required | max:255',
            'slug'  => 'required |alpha_dash |  min:5 | max:255',
            'body'  => 'required'
        ));

       }

        // Store data

        $portfolio = Portfolio::find($id);

        $portfolio->title = $request->input('title');
        $portfolio->slug  = $request->input('slug');
        $portfolio->body = $request->input('body');

        $portfolio->save();

        Session :: flash('success','Portfolio Successfully Updated');
        
        // Redirect

        return redirect()->route('portfolios.show' , $portfolio->id);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $portfolio = Portfolio::find($id);

        $portfolio->delete();

        Session :: flash('success','Portfolio Successfully Deleted :( ');
        

        return redirect()->route('portfolios.index');

    }
}
