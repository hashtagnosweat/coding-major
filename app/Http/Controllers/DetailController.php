<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class DetailController extends Controller
{
       /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $id)
    {
        $course = Course::with(['galleries'])->where('slug', $id)->firstOrFail();
        return view('pages.detail', [
            'course' => $course
        ]);
    }
}
