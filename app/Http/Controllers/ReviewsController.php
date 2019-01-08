<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Review;
class ReviewsController extends Controller
{
  /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function _construct()
    {
        $this->middleware('auth',['except' => ['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::orderBy('id','asc')->paginate(10);

        return view('reviews.index')->with('reviews',$reviews);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'name' => 'required',
            'detail' => 'required'
            
        ]);
        //create post
        $review = new Review;
        $review->title = $request->input('title');
        $review->name = $request->input('name');
        $review->detail = $request->input('detail');
        
       
        $review->save();
        
        return redirect('/reviews')->with('success','Review Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = Review::find($id);
        return view('reviews.show')->with('review',$review);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wisata = Review::find($id);
        //check for user
       /* if (auth()->user()->id !==$wisata->user_id) {
            return redirect('\wisatas')->with('error','Unauthorized Page');
        }*/
        return view('reviews.edit')->with('wisata',$wisata);
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
        $this->validate($request,[
            'title' => 'required',
            'name' => 'required',
            'detail' => 'required'
        ]);


        $wisata = Review::find($id);
        $wisata->title = $request->input('title');
        $wisata->name = $request->input('name');
        $wisata->detail = $request->input('detail');
        $wisata->save();
        
        return redirect('/reviews')->with('success','Review Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::find($id);

        $review->delete();
        return redirect('/reviews')->with('success','Review Removed');
    }
}
