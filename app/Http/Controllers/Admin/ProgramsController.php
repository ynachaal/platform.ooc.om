<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Programs;
use App\Forms;
use App\ApplicationCategory;
use Auth;
use DataTables;

class ProgramsController extends Controller {

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
            $data = Programs::with(['parentProgram','category'])->get()->toArray();
            if (Auth::user()->hasAnyRole(['Admin'])){
                return Datatables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function($row) {
                                $btn = '<a href="' . url('/programs/edit', $row['id']) . '" class="btn btn-primary btn-sm mr-1"><i class="fa fa-edit"></i></a>';
                                return $btn;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
            }else{
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row) {
                        $btn = '<a href="' . url('/programs/edit', $row['id']) . '" class="btn btn-primary btn-sm mr-1"><i class="fa fa-edit"></i></a>';
                        $btn .= '<a onclick="return confirm(\'Are you sure?\');" href="' . url('/programs/delete', $row['id']) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';

                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }
            
        }
        return view('admin.programs.programs');
    }

    public function createPrograms() {
        $programs = Programs::where('parent_id', '==', 0)->get()->toArray();
        $category = ApplicationCategory::get()->toArray();
        $forms = Forms::get()->toArray();
        return view('admin.programs.createprograms', ['programs' => $programs, 'forms' => $forms,'category' => $category]);
    }

    public function savePrograms(Request $request) {
		
		$all = $request->all();
	
        if (isset($request['id'])) {

            $programs = Programs::find($request['id']);
        } else {
            $programs = new Programs;
        }
        $programs->title = $request['title'];
        $programs->description = $request['description'];
        $programs->form_id = $request['form_id'];
        $programs->parent_id = $request['parent_id'];
        $programs->application_category_id = $request['application_category_id'];
        $programs->certificated_approval = $request['certificated_approval'];
		
		
		if(isset($request['proposed_dates_from']) && isset($request['proposed_dates_to']) && !empty($request['proposed_dates_from']) && !empty($request['proposed_dates_to']))
		{
		$from_timestamp = strtotime($request['proposed_dates_from']);
		$to_timestamp = strtotime($request['proposed_dates_to']);
        $programs->proposed_dates_from_timestamp = $from_timestamp;
        $programs->proposed_dates_to_timestamp =  $to_timestamp;
		
		  $programs->proposed_dates_from =date('d-m-Y',$from_timestamp);
		$programs->proposed_dates_to =  date('d-m-Y',$to_timestamp);
		}
		if(isset($_POST['manage_attachment']) && !empty($_POST['manage_attachment'])) {
			$programs->manage_attachment =  json_encode($_POST['manage_attachment']);
		} else {
			$programs->manage_attachment =  null;
		}
        

        if (isset($request['image'])) {
            $image = $request->file('image');
            $programs->image = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/programs');
            $image->move($destinationPath, $programs->image);
        }

        if (isset($request['tech_report'])) {
            $tech_report = $request->file('tech_report');
            $programs->tech_report = time() . '.' . $tech_report->getClientOriginalExtension();
            $destinationPath = public_path('/upload/programs');
            $tech_report->move($destinationPath, $programs->tech_report);
        }

        $programs->save();
        Session::flash('success', 'Saved successfully!');
        return redirect('/programs');
    }

    public function editPrograms ($id) {
        $decode =array();
        $data = Programs::where('id', $id)->first();
        $programs = Programs::where('parent_id', '==', 0)->where('id', '!=', $id)->get()->toArray();
		if(isset($data->manage_attachment))
			$decode = json_decode($data->manage_attachment);
        $forms = Forms::get()->toArray();
        $category = ApplicationCategory::get()->toArray();
        return view('admin.programs.createprograms', ['data' => $data,'programs' => $programs, 'forms' => $forms,'category' => $category,'decode'=>$decode]);
    }

    public function deletePrograms($id) {
        $data = Programs::where('id', $id)->first();
        $data->delete();
        Session::flash('success', 'Deleted successfully!');
        return redirect('/programs');
    }

}
