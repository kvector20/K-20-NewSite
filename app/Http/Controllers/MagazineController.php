<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Magazine;
class MagazineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    public function index()
    {
        return view('admin.magazine.Create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $this->validate($request,
            [
                'title' => 'required',
                'body' => 'required',
                'collection_name' => 'required',
                'collection_month' => 'required',
                'img' => 'required|image'
            ]);
        */
        $img = $request->img;

        $new_img = time().$img->getClientOriginalName();

        $img->move('uploads/magazine',$new_img);

        $magazine = Magazine::create([
            'title' => $request->title,
            'body' => $request->body,
            'author' => $request->author,
            'img' => '/uploads/magazine/'. $new_img,
            'collection_name' => $request->collection_name,
            'collection_month' => $request->collection_month
        ]);

        return redirect()->back()->with('ok','Topic Added Ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $magazine = Magazine::all();

        $topic = Magazine::findOrfail($id);

        return view('Users.Magazine.Topic')->with('magazines',$magazine)
        ->with('topic',$topic);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function user_view()
    {
        $magazine = Magazine::all();
        return view('Users.Magazine.Magazine')->with('magazines',$magazine);
    }
}
