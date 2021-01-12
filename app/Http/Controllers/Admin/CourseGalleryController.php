<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use App\Http\Requests\Admin\CourseGalleryRequest;
Use App\User;
Use App\Category;
Use App\CourseGallery;
use Yajra\DataTables\Facades\DataTables;

class CourseGalleryController extends Controller
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
            $query = CourseGallery::with(['course']);

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
                                <form action="'. route('course-gallery.destroy', $item->id) .'" method="POST">
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
            ->editColumn('photos', function($item) {
                return $item->photos ? '<img src="'. Storage::url($item->photos) .'" style="max-height: 80px;" />' : '';
            })
            ->rawColumns(['action', 'photos'])
            ->make();
        }

        return view('pages.admin.course-gallery.index');
    }

    /**
     * Show the form for creating a new resource.
*
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();

        return view('pages.admin.course-gallery.create', [
            'courses' => $courses
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseGalleryRequest $request)
    {
        $data = $request->all();
        
        $data['photos'] = $request->file('photos')->store('assets/course', 'public');

        CourseGallery::create($data);

        return redirect()->route('course-gallery.index');
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
    //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseGalleryRequest $request, $id)
    {
        // 
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = CourseGallery::findOrFail($id);
        $item->delete();
        
        return redirect()->route('course-gallery.index');
    }
}
