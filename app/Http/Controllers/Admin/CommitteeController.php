<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Committee;
use App\User;
use Auth;
use DataTables;

class CommitteeController extends Controller {

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
            $data = Committee::get()->toArray();

            return Datatables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function($row) {
                                $btn = '<a href="' . url('/committee/edit', $row['id']) . '" class="btn btn-primary btn-sm mr-1"><i class="fa fa-edit"></i></a>';
                                if (Auth::user()->hasAnyRole(['Super Admin'])){
                                    $btn .= '<a href="' . url('/committee/delete', $row['id']) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                                }
                                return $btn;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
        }
        return view('admin.committee.committee');
    }

    public function createCommittee() {

        return view('admin.committee.createcommittee');
    }

    public function saveCommittee(Request $request) {

        if (isset($request['id'])) {

            $committee = Committee::find($request['id']);
        } else {
            $committee = new Committee;
        }
        $committee->committee_name = $request['committee_name'];
        if (isset($request['committee_logo'])) {
            $image = $request->file('committee_logo');
            $committee->committee_logo = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/committee');
            $image->move($destinationPath, $committee->committee_logo);
        }
        $committee->save();
        Session::flash('success', 'Saved successfully!');
        return redirect('/committee');
    }

    public function editCommittee($id) {

        $data = Committee::where('id', $id)->first();
        return view('admin.committee.createcommittee', ['data' => $data]);
    }

    public function deleteCommittee($id) {
        $user = User::where('committee_id', $id)->first();
        if ($user) {
            Session::flash('error', 'This Commitee Can not be Deleted!');
            return redirect('/committee');
        } else {
            $data = Committee::where('id', $id)->first();
            $data->delete();
            Session::flash('success', 'Deleted successfully!');
            return redirect('/committee');
        }
    }

}
