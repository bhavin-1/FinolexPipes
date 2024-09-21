<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return DataTables::of(About::orderBy('id', 'ASC'))
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $html = '<td><div class="acton-data">';
                    $html .= '<a href="' . route('about.edit', $row->id) . '" class="avatar btn-edit p-50 m-0 " data-bs-toggle="tooltip" data-placement="left" title="Edit"><i class="fa fa-edit"></i></a>';
                    $html .= ' <a data-id="' . $row->id . '" href="javascript:void(0);" id="confirm-text" class="avatar bg-light-danger p-50 m-0 text-danger delete" data-bs-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash"></i></a>';
                    $html .= '</div></td>';
                    return $html;
                })
                ->editColumn('image', function ($row) {
                    $html = '<td>';
                    if ($row->image != '' && $row->image != null) {
                        $html .= '<a href="' . asset('upload/about/' . $row->image) . '" data-fancybox="gallery_' . $row->id . '" data-caption="' . $row->title . '" class="gallary-item-overlay">';
                        $html .= '<img class="img-fluid rounded" height="35" width="35" src="' . asset('upload/about/' . $row->image) . '" alt="' . $row->title . '" title="' . $row->title . '">';
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
                ->editColumn('long_description', function ($row) {
                    $html = '<td><div class="text multiline-ellipsis">';
                    $html .= $row->long_description;
                    $html .= '</div><button type="button" class="btn btn-sm btn-primary read-more">Read more</button>';
                    return $html;
                })
                ->rawColumns(['action', 'image', 'description', 'long_description'])
                ->make(true);
        } else {
            return view('backend.about.view_about');
        }
    }

    public function create()
    {
        return view('backend.about.add_about');
        return redirect()->back();
    }

    public function store(Request $request)
    {
        if (!is_null($request->about_id)) {
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
            if (!is_null($request->about_id)) {
                $about = About::where('id', $request->about_id)->first();
                $response = ['data' => route('about.index'), 'status' => true, 'message' => ' About Updated Successfully.'];
            } else {
                $about = new About();
                $response = ['data' => route('about.index'), 'status' => true, 'message' => ' About Added Successfully.'];
            }
            $about->title = $request->title;
            $about->description = $request->description;
            $about->long_description = $request->long_description;
            if ($request->hasfile('image')) {
                //image update than old image remove
                // if ($about->image) {
                //     $path1 = 'upload/about/' . $about->image;
                //     if (File::exists($path)) {
                //         unlink($path);
                //     }
                //     // $path2 = 'upload/about/thumbnail/' . $about->image;
                //     // if (File::exists($path)) {
                //     //     unlink($path);
                //     // }
                // }
                // $original_photo_storage = 'upload/about/';
                // if (!file_exists($original_photo_storage)) {
                //     mkdir($original_photo_storage, 0777, true);
                // }
                // $mobile_photos_storage = 'upload/about/thumbnail/';
                // if (!file_exists($mobile_photos_storage)) {
                //     mkdir($mobile_photos_storage, 0777, true);
                // }

                // $file = $request->file('image');
                // $images = Image::make($file->getRealPath());
                // $filename = str_ireplace(" ", "-", $request->title) . '-' . rand() . time() . '.webp';
                // $images->resize(150, 150, function ($constraint) {
                //     $constraint->aspectRatio();
                // })->save($mobile_photos_storage . '/' . $filename, 85);

                // // $images->resize(468, 328, function ($constraint) {
                // //     $constraint->aspectRatio();
                // // })->save($original_photo_storage . '/' . $filename, 85);

                // $file->move($original_photo_storage, $filename, 100);
                // $about->image = $filename;
            }

            if ($request->hasfile('image')) {
                //image update than old image remove
                if ($about->image) {
                    $path = 'upload/about/' . $about->image;
                    if (File::exists($path)) {
                        unlink($path);
                    }
                }
                $PhotosDir = 'upload/about/';
                if (!file_exists($PhotosDir)) {
                    mkdir($PhotosDir, 0777, true);
                }
                $file = $request->file('image');
                $filename = $request->title . '-' . time() . rand() . '.webp';
                $file->move('upload/about/', $filename);
                $about->image = $filename;
            }

            $result = $about->save();
            DB::commit();
            if (!is_null($result)) {
                return response()->json($response);
            } else {
                $response = ['status' => false, 'server_error' => 'Something went wrong. Please try again.'];
                return response()->json($response);
            }
        } catch (\Exception $e) {
            // dd($e);
            DB::rollback();
            $response = ['status' => false, 'server_error' => 'Something went wrong. Please try again.'];
            return response()->json($response);
        }
    }

    public function show(About $about)
    {
        //
    }

    public function edit($id)
    {
        $about = About::where('id', $id)->first();
        return view('backend.about.add_about', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        //
    }

    public function destroy(About $about)
    {
        try {
            $about = About::where('id', $about->id)->first();
            $path = 'upload/about/' . $about->image;
            if ($about->image) {
                if (File::exists($path)) {
                    unlink($path);
                }
            }
            // $path2 = 'upload/about/thumbnail/' . $about->image;
            // if ($about->image) {
            //     if (File::exists($path2)) {
            //         unlink($path2);
            //     }
            // }
            
            $about->delete();
            return response()->json(array('success' => 1, "errorMessage" => 'About Master Deleted'));
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json(array('success' => 0, "errorMessage" => 'Error'));
        } catch (\Exception $e) {
            return response()->json(array('success' => 0, "errorMessage" => 'Server Error'));
        }
    }
}
