<?php

namespace App\Http\Controllers;

use App\Models\Process;
use App\Models\ProcessMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ProcessController extends Controller
{

    public function index()
    {
        if (request()->ajax()) {
            return DataTables::of(Process::orderBy('id', 'ASC'))
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $html = '<td><div class="acton-data">';
                    $html .= '<a data-id="' . $row->id . '" role="button" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal" class="view avatar bg-light-info p-50 m-0 text-info" data-bs-toggle="tooltip" data-placement="left" title="View"><i class="fa fa-eye"></i></a>';
                    $html .= '<a href="' . route('proceses.edit', $row->id) . '" class=" avatar btn-edit p-50 m-0" data-bs-toggle="tooltip" data-placement="left" title="Edit"><i class="fa fa-edit"></i></a>';
                    $html .= '<a data-id="' . $row->id . '" href="javascript:void(0);" id="confirm-text" class="avatar bg-light-danger p-50 m-0 text-danger delete" data-bs-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash"></i></a>';
                    $html .= '</dv></td>';
                    return $html;
                })
                ->editColumn('image', function ($row) {
                    $html = '<td>';
                    if ($row->image != '' && $row->image != null) {
                        $html .= '<a href="' . asset('upload/process/' . $row->image) . '" data-fancybox="gallery_' . $row->id . '" data-caption="' . $row->title . '" class="gallary-item-overlay">';
                        $html .= '<img class="img-fluid rounded" height="40" width="50" src="' . asset('upload/process/' . $row->image) . '" alt="' . $row->title . '" title="' . $row->title . '">';
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
            return view('backend.process.view_process');
        }
    }

    public function create()
    {
        return view('backend.process.add_process');
    }

    public function store(Request $request)
    {
        if (!is_null($request->process_id)) {
            $temp = 'nullable|image|mimes:jpeg,png,jpg|max:2048';
        } else {
            $temp = 'required|image|mimes:jpeg,png,jpg|max:2048';
        }
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => $temp,
        ], [
            'title.required' => 'Enter Title',
            'image' => 'Choose Image',
            'image.image' => 'The type of the uploaded file should be an image',
            'image.max' => 'Failed to upload an image. The image maximum size is 2MB',
        ]);
        if ($validator->fails()) {
            $response = ['status' => false, 'message' => 'Please Input Proper Data !!', 'errors' => $validator->errors()];
            return response()->json($response);
        }
        DB::beginTransaction();
        try {
            if (!is_null($request->process_id)) {
                $process = Process::where('id', $request->process_id)->first();
                $response = ['data' => route('process.index'), 'status' => true, 'message' => ' Process Updated Successfully.'];
            } else {
                $process = new Process();
                $response = ['data' => route('process.index'), 'status' => true, 'message' => ' Process Added Successfully.'];
            }
            $process->title = $request->title;
            $process->description = $request->description;
            if ($request->hasfile('image')) {
                //image update than old image remove
                if ($process->image) {
                    $path = 'upload/process/' . $process->image;
                    if (File::exists($path)) {
                        unlink($path);
                    }
                }
                $PhotosDir = 'upload/process/';
                if (!file_exists($PhotosDir)) {
                    mkdir($PhotosDir, 0777, true);
                }
                $file = $request->file('image');
                $filename = $request->title . '-' . time() . rand() . '.webp';
                $file->move('upload/process/', $filename);
                $process->image = $filename;
            }

            $result = $process->save();
            DB::commit();

            if (count($request->invoice) > 0) {
                foreach ($request->invoice as $key => $value) {
                    if (!is_null($value)) {
                        if ($value['id'] != '') {
                            $processmeta = ProcessMeta::where('id', $value['id'])->first();
                            if ($value['meta_title'] != '') {
                                if (!empty($value['meta_image'])) {
                                    $temp = $this->test($value['meta_image']);
                                    if ($temp) {
                                        $processmeta->meta_image = $temp;
                                    }
                                }
                                $processmeta->process_id = $process->id;
                                $processmeta->meta_title = $value['meta_title'];
                                $processmeta->meta_description = $value['meta_description'];
                                $processmeta->save();
                            }
                        } else {
                            $processmeta = new ProcessMeta();
                            if ($value['meta_title'] != '') {
                                if (!empty($value['meta_image'])) {
                                    $temp = $this->test($value['meta_image']);
                                    $processmeta->meta_image = $temp;
                                }
                                $processmeta->process_id = $process->id;
                                $processmeta->meta_title = $value['meta_title'];
                                $processmeta->meta_description = $value['meta_description'];
                                $processmeta->save();
                            }
                        }
                    }
                }
            }

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


    public function show($id)
    {
        // dd($id);
        $processmeta = ProcessMeta::where('process_id', $id)->get();
        // dd($processmeta);
        $data['html'] = view('backend.process.view_process_meta', compact('processmeta'))->render();
        return response()->json($data);
    }

    public function edit($id)
    {
        $process = Process::with('processmeta')->where('id', $id)->first();
        return view('backend.process.add_process', compact('process'));
    }

    public function update(Request $request, Process $process)
    {
        //
    }


    public function destroy(Process $process)
    {
        try {
            $process = Process::where('id', $process->id)->first();
            $path = 'upload/process/' . $process->image;
            if ($process->image) {
                if (File::exists($path)) {
                    unlink($path);
                }
            }
            $process->delete();
            return response()->json(array('success' => 1, "errorMessage" => 'Proceess Master Deleted'));
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json(array('success' => 0, "errorMessage" => 'Error'));
        } catch (\Exception $e) {
            return response()->json(array('success' => 0, "errorMessage" => 'Server Error'));
        }
    }
    public function test($value)
    {
        if (!empty($value)) {
            $PhotosDir = 'upload/process/process_meta/';
            if (!file_exists($PhotosDir)) {
                mkdir($PhotosDir, 0777, true);
            }
            $filename = 'img' . '-' . time() . rand() . '.webp';
            $value->move('upload/process/process_meta/', $filename);
            return $filename;
        }
        return false;
    }
}
