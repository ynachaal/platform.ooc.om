<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\WhatsappMessage;
use App\Http\Controllers\Controller;
use DataTables;

class WhatsappMessagesController extends Controller
{
    /**
     * Display a listing of WhatsApp messages.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = WhatsappMessage::orderBy('created_at', 'desc')->get()->toArray();

            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('parameters', function ($row) {
                    if (is_array($row['parameters'])) {
                        return json_encode($row['parameters'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
                    }
                    return $row['parameters'] ?? '---';
                })
                ->editColumn('message_body', function ($row) {
                    return $row['message_body'] ?? '---';
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . url('/admin/whatsapp-messages/' . $row['id']) . '" class="btn btn-info btn-sm mr-1"><i class="fa fa-eye"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.whatsapp_messages.index');
    }
}
