<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Magazine;
use App\Http\Resources\Magazine as MagazineResource;
class MagazineApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Magazine = Magazine::all();

        return MagazineResource::collection($Magazine);
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
        $Magazine = $request->isMethod('put') ? Magazine::findOrFail
        ($request->id) : new Magazine;

        $Magazine->id = $request->input('id');
        $Magazine->title = $request->input('title');
        $Magazine->body = $request->input('body');
        $Magazine->author = $request->input('author');

        if($Magazine->save())
        {
            return new MagazineResource($Magazine);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Magazine = Magazine::findOrFail($id);

        return new MagazineResource($Magazine);
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
        $Magazine = Magazine::findOrFail($id);
        $Magazine->title = $request->input('title');
        $Magazine->body = $request->input('body');
        $Magazine->author = $request->input('author');

        $Magazine->save();

        return new MagazineResource($Magazine);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Magazine = Magazine::findOrFail($id);
        $Magazine->delete();
    }
}
