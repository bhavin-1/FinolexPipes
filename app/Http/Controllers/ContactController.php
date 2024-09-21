<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return DataTables::of(Contact::orderBy('id', 'ASC'))
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $html = '<td><div class="acton-data">';
                    // $html .= '<a href="' . route('contact.edit', $row->id) . '" class="avatar bg-light-success p-50 m-0 text-success" data-bs-toggle="tooltip" data-placement="left" title="Edit"><i class="fa fa-edit"></i></a>';
                    $html .= ' <a data-id="' . $row->id . '" href="javascript:void(0);" id="confirm-text" class="avatar bg-light-danger p-50 m-0 text-danger delete" data-bs-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash"></i></a>';
                    $html .= '</div></td>';
                    return $html;
                })
                ->rawColumns(['action'])
                ->make(true);
        } else {
            return view('backend.view_contact_list');
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Contact $contact)
    {
        //
    }

    public function edit(Contact $contact)
    {
        //
    }

    public function update(Request $request, Contact $contact)
    {
        //
    }

    public function destroy(Contact $contact)
    {
        try {
            $contact = Contact::where('id', $contact->id)->first();
            $contact->delete();
            return response()->json(array('success' => 1, "errorMessage" => 'Contact record has been deleted'));
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json(array('success' => 0, "errorMessage" => 'Error'));
        } catch (\Exception $e) {
            return response()->json(array('success' => 0, "errorMessage" => 'Server Error'));
        }
    }
}
