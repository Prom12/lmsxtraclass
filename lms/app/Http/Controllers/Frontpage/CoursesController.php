<?php

namespace App\Http\Controllers\Frontpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function courses()
    {
    	  return view('frontpage.layouts.courses');
    }
}
