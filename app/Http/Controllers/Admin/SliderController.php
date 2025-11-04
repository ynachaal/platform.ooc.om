<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Slider;
use Auth;
use DataTables;

class SliderController extends Controller {

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
            $data = Slider::get()->toArray();

            return Datatables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function($row) {
                                $btn = '<a href="' . url('/slider/edit', $row['id']) . '" class="btn btn-primary btn-sm mr-1"><i class="fa fa-edit"></i></a>';
                                if (Auth::user()->hasAnyRole(['Super Admin'])){
                                $btn .= '<a href="' . url('/slider/delete', $row['id']) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                                }
                                return $btn;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
        }
        return view('admin.slider');
    }

    public function createSlider() {

        return view('admin.createslider');
    }

    public function saveSlider(Request $request) {
        $validatedData = $request->validate([
                'order_by' => 'required',
                
                    ], [
                'order_by.required' => 'مطلوب أمر مقدم من قبل',
                
            ]);
        if (isset($request['id'])) {

            $slider = Slider::find($request['id']);
        } else {
            $slider = new Slider;
        }
        $slider->order_by = $request['order_by'];
        if (isset($request['image'])) {
            $image = $request->file('image');
            $slider->image = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/slider');
            $image->move($destinationPath, $slider->image);
        }
        $slider->save();
        Session::flash('success', 'Saved successfully!');
        return redirect('/slider');
    }

    public function editSlider($id) {

        $data = Slider::where('id', $id)->first();
        return view('admin.createslider', ['data' => $data]);
    }
    
    public function deleteSlider($id) {
        $data = Slider::where('id', $id)->first();
        $data->delete();
        Session::flash('success', 'Deleted successfully!');
        return redirect('/slider');
    }
}
