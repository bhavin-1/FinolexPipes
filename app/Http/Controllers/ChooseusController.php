<?php

namespace App\Http\Controllers;

use App\Models\Chooseus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ChooseusController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return DataTables::of(Chooseus::orderBy('id', 'ASC'))
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $html = '<td><div class="acton-data">';
                    $html .= '<a href="' . route('chooseus.edit', $row->id) . '" class="avatar btn-edit p-50 m-0 text-success" data-bs-toggle="tooltip" data-placement="left" title="Edit"><i class="fa fa-edit"></i></a>';
                    // $html .= '<a data-id="' . $row->id . '" href="javascript:void(0);" id="confirm-text" class="avatar bg-light-danger p-50 m-0 text-danger delete"  data-bs-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash"></i></a>';
                    $html .= '</div></td>';
                    return $html;
                })
                ->editColumn('image', function ($row) {
                    $html = '<td>';
                    if ($row->image != '' && $row->image != null) {
                        $html .= '<a href="' . asset('upload/chooseus/' . $row->image) . '" data-fancybox="gallery_' . $row->id . '" data-caption="' . $row->title . '" class="gallary-item-overlay">';
                        $html .= '<img class="img-fluid rounded" height="35" width="35" src="' . asset('upload/chooseus/' . $row->image) . '" alt="' . $row->title . '" title="' . $row->title . '">';
                        $html .= '</a>';
                    } else {
                        $html .= ' ';
                    }
                    $html .= '</td>';
                    return $html;
                })
                ->editColumn('description', function ($row) {
                    $html = '<td><div class="text multiline-ellipsis">';
                    $html .= $row->description;
                    $html .= '</div><button type="button" class="btn btn-sm btn-primary read-more">Read more</button>';
                    return $html;
                })
                ->rawColumns(['action', 'image', 'description'])
                ->make(true);
        } else {
            return view('backend.chooseus.view_chooseus');
        }
    }
    public function create()
    {
        // return view('backend.chooseus.add_chooseus');
        return redirect()->back();
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ], [
            'title.required' => 'Enter Title',
            'description.required' => 'Enter Description',
        ]);
        if ($validator->fails()) {
            $response = ['status' => false, 'message' => 'Please Input Proper Data !!', 'errors' => $validator->errors()];
            return response()->json($response);
        }
        DB::beginTransaction();
        try {
            if (!is_null($request->chooseus_id)) {
                $chooseus = Chooseus::where('id', $request->chooseus_id)->first();
                $response = ['data' => route('chooseus.index'), 'status' => true, 'message' => ' Chooseus Updated Successfully.'];
            } else {
                $chooseus = new Chooseus();
                $response = ['data' => route('chooseus.index'), 'status' => true, 'message' => ' Chooseus Added Successfully.'];
            }
            $chooseus->title = $request->title;
            $chooseus->short_description = $request->short_description;
            $chooseus->description = $request->description;
            if ($request->hasfile('image')) {
                //image update than old image remove
                if ($chooseus->image) {
                    $path = 'upload/chooseus/' . $chooseus->image;
                    if (File::exists($path)) {
                        unlink($path);
                    }
                }
                $PhotosDir = 'upload/chooseus/';
                if (!file_exists($PhotosDir)) {
                    mkdir($PhotosDir, 0777, true);
                }
                $file = $request->file('image');
                $filename = 'img-' . time() . rand() . '.webp';
                $file->move('upload/chooseus/', $filename);
                $chooseus->image = $filename;
            }

            $result = $chooseus->save();
            DB::commit();
            if (!is_null($result)) {
                return response()->json($response);
            } else {
                $response = ['status' => false, 'server_error' => 'Something went wrong. Please try again.'];
                return response()->json($response);
            }
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            $response = ['status' => false, 'server_error' => 'Something went wrong. Please try again.'];
            return response()->json($response);
        }
    }

    public function show(Chooseus $chooseus)
    {
        //
    }

    public function edit($id)
    {
        $chooseus = Chooseus::where('id', $id)->first();
        return view('backend.chooseus.add_chooseus', compact('chooseus'));
    }
    public function update(Request $request, Chooseus $chooseus)
    {
        //
    }
    public function destroy($id)
    {
        try {
            $chooseus = Chooseus::find($id);
            $path = 'upload/chooseus/' . $chooseus->image;
            if ($chooseus->image) {
                if (File::exists($path)) {
                    unlink($path);
                }
            }
            $chooseus->delete();
            return response()->json(array('success' => 1, "errorMessage" => 'Chooseus Master Deleted'));
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json(array('success' => 0, "errorMessage" => 'Error'));
        } catch (\Exception $e) {
            return response()->json(array('success' => 0, "errorMessage" => 'Server Error'));
        }
    }
}
