<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Instructions;
use App\ApplicationCategory;
use App\Application;
use Auth;
use DataTables;

class InstructionsController extends Controller {

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
            $data = Instructions::get()->toArray();

            return Datatables::of($data)
                            ->addIndexColumn()
							 ->addColumn('title', function ($row) {
								 $upload_file = $row['upload_file'];
								 $title =  $row['title'];
								 if(isset($row['youtube_links']) && !empty($row['youtube_links'])) {
									 $ylink = $row['youtube_links'];
									 return '<a target="_blank" href="'.$ylink.'">'.$title.'</a>';
								 }
								 else
									return '<a target="_blank" href="/upload/instructions/'.$upload_file.'">'.$title.'</a>';
								})
							
								->addColumn('action', function($row) {
                              $btn = '<a href="' . url('/instructions/editInstruction', $row['id']) . '" class="btn btn-primary btn-sm mr-1"><i class="fa fa-edit"></i></a>';
                                if (Auth::user()->hasAnyRole(['Super Admin'])){
                                     $btn .= '<a onclick="return confirm(\'Are you sure?\');" href="' . url('/instructions/delete', $row['id']) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                                }
                                return $btn;
                            })
                            ->rawColumns(['action','title'])
                            ->make(true);
        }
        return view('admin.instructions.index');
    }
	public function create(Request $request) {
      
        return view('admin.instructions.create');
    }
	 public function save(Request $request) {
       if (isset($request['id'])) {

            $model = Instructions::find($request['id']);
        } else {
            $model = new Instructions();
        }
		 $model->title = $request['title'];
		 $model->sort_order = $request['sort_order'];
		 $model->active_status = $request['active_status'];
		 if(isset($request['youtube_links']) && !empty($request['youtube_links'])) {
			  $model->upload_file =  null;
			    $model->youtube_links = $request['youtube_links'];
		 }
		
   

        if (isset($request['upload_file'])) {
            $upload_file = $request->file('upload_file');
            $model->upload_file = time() . '.' . $upload_file->getClientOriginalExtension();
            $destinationPath = public_path('/upload/instructions');
            $upload_file->move($destinationPath, $model->upload_file);
        }
		if($model->save())
        Session::flash('success', 'Saved successfully!');
        return redirect('/instructions-listing');
    }
	  public function deleteInstruction($id) {
        $data = Instructions::where('id', $id)->first();
        $data->delete();
        Session::flash('success', 'Deleted successfully!');
        return redirect('/instructions-listing');
    }
	  public function editInstruction($id) {

        $data = Instructions::where('id', $id)->first();
        return view('admin.instructions.create', ['data' => $data]);
    }
}
