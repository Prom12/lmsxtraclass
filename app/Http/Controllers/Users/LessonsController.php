<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\User\lessons;
use App\Model\User\courses;
use App\Model\User\categories;
class LessonsController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = courses::all();
        $lessons = lessons::all();
        return view('users.content.lessons.show',compact('lessons','courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =categories::all();
        $courses = courses::all();
        return view('users.content.lessons.lessons',compact(['courses','categories']));
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
            'category' => 'required',
            'course' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);

        $lessons = new lessons;
        $lessons->title = $request->title;
        $lessons->categories_id = $request->category;
        $lessons->course_id = $request->course;
        $lessons->description = $request->description;
        $lessons->link = $request->link;
        $lessons->save();

        return redirect(route('users.lessons.create'));
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
        $categories = categories::all();
        $courses =  courses::all();
        $lessons = lessons::where('id',$id)->first();
        return view('users.content.lessons.edit',compact(['categories','courses','lessons']));
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
            'category' => 'required',
            'course' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);

        $lessons = lessons::where('id',$id)->first();
        $lessons->title = $request->title;
        $lessons->categories_id = $request->category;
        $lessons->course_id = $request->course;
        $lessons->description = $request->description;
        $lessons->link = $request->link;
        $lessons->save();

        return redirect(route('users.lessons.create'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        lessons::where('id',$id)->delete();
        return redirect()->back()->with('message','Lesson is deleted successfully');
    }
}
