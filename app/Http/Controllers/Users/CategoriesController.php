<?php

namespace App\Http\Controllers\users;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\User\categories;
use App\Model\User\courses;
use App\Model\User\lessons;

class CategoriesController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $categories = categories::all();
        return view('users.content.categories.show',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('users.content.categories.categories');
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
            'title'=>'required',
        ]);

        $categories = new categories;
        $categories->title = $request->title;
        $categories->save();

        return redirect(route('users.categories.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $categories = categories::where('id',$id)->first();
        return view('users.content.categories.edit',compact('categories'));
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
            'title'=>'required',
        ]);

        $categories = categories::where('id',$id)->first();
        $categories->title = $request->title;
        $categories->save();

        return redirect(route('users.categories.create'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        categories::where('id',$id)->delete();
        lessons::where('categories_id',$id)->delete();
        courses::where('categories_id',$id)->delete();

        return redirect()->back()->with('message','Category is deleted successfully');
    }
}
