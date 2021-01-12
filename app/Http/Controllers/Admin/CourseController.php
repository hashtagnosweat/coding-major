<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use App\Http\Requests\Admin\CourseRequest;
Use App\User;
Use App\Category;
use Yajra\DataTables\Facades\DataTables;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            $query = Course::with(['user', 'category']);

            return Datatables::of($query)
            ->addColumn('action', function($item) {
                return '
                    <div class="btn-group">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle mr-1 mb-1"
                                type="button" 
                                data-toggle="dropdown">
                                Action
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="' . route('course.edit', $item->id) . '">
                                Edit
                                </a>
                                <form action="'. route('course.destroy', $item->id) .'" method="POST">
                                ' . method_field('delete') . csrf_field() . '
                                <button type="submit" class="dropdown-item text-danger">
                                Delete
                                </button>
                                </form>
                            </div>
                    </div>
                    </div>
                ';
            })
            ->rawColumns(['action'])
            ->make();
        }

        return view('pages.admin.course.index');
    }

    /**
     * Show the form for creating a new resource.
*
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $categories = Category::all();

        return view('pages.admin.course.create', [
            'users' => $users,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
        $data = $request->all();
        
        $data['slug'] = Str::slug($request->name);

        Course::create($data);

        return redirect()->route('course.index');
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
        $item = Course::findOrFail($id);
        $users = User::all();
        $categories = Category::all();

        return view('pages.admin.course.edit', [
            'item' => $item,
            'users' => $users,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseRequest $request, $id)
    {
        $data = $request->all();
    
        $item = Course::findOrFail($id);

        $data['slug'] = Str::slug($request->name);

        $item->update($data);

        return redirect()->route('course.index');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Course::findOrFail($id);
        $item->delete();
        
        return redirect()->route('course.index');
    }
}
