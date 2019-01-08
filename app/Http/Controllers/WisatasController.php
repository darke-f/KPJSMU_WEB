<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;
use DB;
class WisatasController extends Controller
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
        $wisatas = Wisata::orderBy('id','asc')->paginate(10);

        return view('wisatas.index')->with('wisatas',$wisatas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->bool !== 1) {
            return redirect('\about')->with('error','Unauthorized Page');
        }
        return view('wisatas.create');
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
            'detail' => 'required',
            'hotel' => 'required'
        ]);
        //create post
        $wisata = new Wisata;
        $wisata->title = $request->input('title');
        $wisata->detail = $request->input('detail');
        $wisata->hotel = $request->input('hotel');
       
        $wisata->save();
        
        return redirect('/wisatas')->with('success','Wisata Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wisata = Wisata::find($id);
        return view('wisatas.show')->with('wisata',$wisata);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (auth()->user()->bool !== 1) {
            return redirect('\about')->with('error','Unauthorized Page');
        }
        $wisata = Wisata::find($id);
        //check for user
       /* if (auth()->user()->id !==$wisata->user_id) {
            return redirect('\wisatas')->with('error','Unauthorized Page');
        }*/
        return view('wisatas.edit')->with('wisata',$wisata);
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
            'detail' => 'required',
            'hotel' => 'required'
        ]);


        $wisata = Wisata::find($id);
        $wisata->title = $request->input('title');
        $wisata->detail = $request->input('detail');
        $wisata->hotel = $request->input('hotel');
        $wisata->save();
        
        return redirect('/wisatas')->with('success','Wisata Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (auth()->user()->bool !== 1) {
            return redirect('\about')->with('error','Unauthorized Page');
        }
        $wisata = Wisata::find($id);

        $wisata->delete();
        return redirect('/wisatas')->with('success','wisata Removed');
    }
}
