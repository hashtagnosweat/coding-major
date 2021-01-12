<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::take(4)->get();
        $courses = Course::with('galleries')->take(4)->get();

        return view('pages.home', [
            'categories' => $categories,
            'courses' => $courses
        ]);
    }
}
