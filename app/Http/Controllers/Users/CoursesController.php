<?php

namespace App\Http\Controllers\users;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\User\courses;
use App\Model\User\lessons;
use App\Model\User\categories;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = categories::all();
        $courses = courses::all();
        return view('users.content.courses.show',compact('courses','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = categories::all();
        return view('users.content.courses.courses',compact('categories'));
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
            'price' => 'required',
            'description' => 'required',
            'image'=>'required',
        ]);

        if($request->hasfile('image')){
           $image = $request->image->store('public/category');
        }

        $user_id = \Auth::id();
        $lecturer = \Auth::user()->name;

        $course = new courses;
        $course->title = $request->title;
        $course->lecturer = $lecturer;
        $course->image = $image;
        $course->user_id = $user_id;
        $course->categories_id = $request->category;
        $course->price = $request->price;
        $course->description = $request->description;
        $course->save();

        return redirect(route('users.courses.create'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        $courses = courses::where('id',$id)->first();
        return view('users.content.courses.edit',compact('courses','categories'));
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
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        if($request->hasfile('image')){
            $image = $request->image->store('public/category');
        }


        $user_id = \Auth::id();
        $lecturer = \Auth::user()->name;


        $course = courses::where('id',$id)->first();
        $course->title = $request->title;
        $course->lecturer = $lecturer;
        $course->image = $image;
        $course->user_id = $user_id;
        $course->categories_id = $request->category;
        $course->price = $request->price;
        $course->description = $request->description;
        $course->save();

        return redirect(route('users.courses.create'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        courses::where('id',$id)->delete();
        lessons::where('course_id',$id)->delete();
        return redirect()->back()->with('message','Course is deleted successfully');
    }
}
