<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\ApplicationCategory;
use App\Application;
use Auth;
use DataTables;

class CategoryController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request) {
	

        if ($request->ajax()) {
            $data = ApplicationCategory::get()->toArray();
            
            return Datatables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function($row) {
                                $btn = '<a href="' . url('/category/edit', $row['id']) . '" class="btn btn-primary btn-sm mr-1"><i class="fa fa-edit"></i></a>';
                                if (Auth::user()->hasAnyRole(['Super Admin'])){
                                    $btn .= '<a href="' . url('/category/delete', $row['id']) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                                }
                                return $btn;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
        }
        return view('admin.category.category');
    }

    public function createCategory() {

        return view('admin.category.createcategory');
    }

    public function saveCategory(Request $request) {

        if (isset($request['id'])) {

            $category = ApplicationCategory::find($request['id']);
        } else {
            $category = new ApplicationCategory;
        }
        $category->name = $request['name'];
        
        $category->save();
        Session::flash('success', 'Saved successfully!');
        return redirect('/category');
    }

    public function editCategory($id) {

        $data = ApplicationCategory::where('id', $id)->first();
        return view('admin.category.createcategory', ['data' => $data]);
    }

    public function deleteCategory($id) {
        $user = Application::where('application_category_id', $id)->first();
        if ($user) {
            Session::flash('error', 'This Category Can not be Deleted!');
            return redirect('/category');
        } else {
            $data = ApplicationCategory::where('id', $id)->first();
            $data->delete();
            Session::flash('success', 'Deleted successfully!');
            return redirect('/category');
        }
    }

}
