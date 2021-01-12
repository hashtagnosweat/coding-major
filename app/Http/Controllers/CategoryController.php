<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;

use Illuminate\Http\Request;

class CategoryController extends Controller
{ 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $courses = Course::with('galleries')->paginate(10);

        return view('pages.category', [
            'categories' => $categories,
            'courses' => $courses
            ]);
    }

      /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function detail(Request $request, $slug)
    {
        $categories = Category::all();
        $category = Category::where('slug', $slug)->firstOrFail();
        $courses = Course::with('galleries')->where('categories_id', $category->id)->paginate(10);

        return view('pages.category', [
            'categories' => $categories,
            'courses' => $courses
            ]);
    }
}
