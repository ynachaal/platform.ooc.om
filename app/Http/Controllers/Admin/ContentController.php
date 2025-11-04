<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Content;
use Auth;
use DataTables;

class ContentController extends Controller {

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
            $data = Content::orderBy('sort_order', 'ASC')->get()->toArray();

            return Datatables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function($row) {
                                $btn = '<a href="' . url('/content/edit', $row['id']) . '" class="btn btn-primary btn-sm mr-1"><i class="fa fa-edit"></i></a>';
                                if (Auth::user()->hasAnyRole(['Super Admin'])){
                                    $btn .= '<a onclick="return confirm(\'Are you sure?\');" href="' . url('/content/delete', $row['id']) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                                }
                                return $btn;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
        }
        return view('admin.content');
    }

    public function createContent() {

        return view('admin.createcontent');
    }

    public function saveContent(Request $request) {

        if (isset($request['id'])) {

            $content = Content::find($request['id']);
        } else {
            $content = new Content;
        }
        $content->title = $request['title'];
        $content->sort_order = $request['sort_order'];
        $content->description = $request['description'];

        if (isset($request['upload_file'])) {
            $upload_file = $request->file('upload_file');
            $content->upload_file = time() . '.' . $upload_file->getClientOriginalExtension();
            $destinationPath = public_path('/upload/contect');
            $upload_file->move($destinationPath, $content->upload_file);
        }

        $content->save();
        Session::flash('success', 'Saved successfully!');
        return redirect('/content');
    }

    public function editContent($id) {

        $data = Content::where('id', $id)->first();
        return view('admin.createcontent', ['data' => $data]);
    }

    public function deleteContent($id) {
        $data = Content::where('id', $id)->first();
        $data->delete();
        Session::flash('success', 'Deleted successfully!');
        return redirect('/content');
    }

}
