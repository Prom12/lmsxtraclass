<?php

namespace App\Http\Controllers\users;

use App\Model\User\categories;
use App\Model\User\courses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyCoursesController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    	$courses = courses::where('user_id',\Auth::id())->paginate(10);
    	return $courses;
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return ;
    }

}
