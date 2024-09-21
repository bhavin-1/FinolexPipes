<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Intervention\Image\Facades\Image;
class SliderController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return DataTables::of(Slider::orderBy('id', 'ASC'))
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $html = '<td><div class="acton-data">';
                    $html .= '<a href="' . route('slider.edit', $row->id) . '" class=" avatar btn-edit p-50 m-0 text-primary" data-bs-toggle="tooltip" data-placement="left" title="Edit"><i class="fa fa-edit"></i></a>';
                    $html .= '<a data-id="' . $row->id . '" href="javascript:void(0);" id="confirm-text" class="avatar bg-light-danger p-50 m-0 text-danger delete" data-bs-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash"></i></a>';
                    $html .= '</div></td>';
                    return $html;
                })
                ->editColumn('image', function ($row) {
                    $html = '<td>';
                    if ($row->image != '' && $row->image != null) {
                        $html .= '<a href="' . asset('upload/slider/' . $row->image) . '" data-fancybox="gallery_' . $row->id . '" data-caption="' . $row->title . '" class="gallary-item-overlay">';
                        $html .= '<img class="img-fluid rounded" height="35" width="35" src="' . asset('upload/slider/' . $row->image) . '" alt="' . $row->title . '" title="' . $row->title . '">';
                        $html .= '</a>';
                    } else {
                        $html .= ' ';
                    }
                    $html .= '</td>';
                    return $html;
                })
                ->rawColumns(['action', 'image'])
                ->make(true);
        } else {
            return view('backend.slider.view_slider');
        }
        // return view('backend.slider.view_slider');
    }

    public function create()
    {
        return view('backend.slider.add_slider');
    }

    public function store(Request $request)
    {
        if (!is_null($request->slider_id)) {
            $temp = 'nullable|image|mimes:jpeg,png,jpg|max:2048';
        } else {
            $temp = 'required|image|mimes:jpeg,png,jpg|max:2048';
        }
        $validator = Validator::make($request->all(), [
            'image' => $temp,
        ], [
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
            if (!is_null($request->slider_id)) {
                $slider = Slider::where('id', $request->slider_id)->first();
                $response = ['data' => route('slider.index'), 'status' => true, 'message' => ' Slider Updated Successfully.'];
            } else {
                $slider = new Slider();
                $response = ['data' => route('slider.index'), 'status' => true, 'message' => ' Slider Added Successfully.'];
            }
            $slider->title = $request->title;
            $slider->short_description = $request->short_description;
            if ($request->hasfile('image')) {
                //image update than old image remove
                if ($slider->image) {
                    $path1 = 'upload/slider/' . $slider->image;
                    if (File::exists($path1)) {
                        unlink($path1);
                    }
                    $path2 = 'upload/slider/thumbnail/' . $slider->image;
                    if (File::exists($path2)) {
                        unlink($path2);
                    }
                }
                $original_photo_storage = 'upload/slider/';
                if (!file_exists($original_photo_storage)) {
                    mkdir($original_photo_storage, 0777, true);
                }
                $mobile_photos_storage = 'upload/slider/thumbnail/';
                if (!file_exists($mobile_photos_storage)) {
                    mkdir($mobile_photos_storage, 0777, true);
                }

                $file = $request->file('image');
                $images = Image::make($file->getRealPath());
                $filename = str_ireplace(" ", "-", $request->title) . '-' . rand().time() . '.webp';
                $images->resize(150, 150, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($mobile_photos_storage . '/' . $filename, 85);
                $file->move($original_photo_storage, $filename, 100);
                $slider->image = $filename;
            }
 
            // if ($request->hasfile('image')) {
            //     //image update than old image remove
            //     if ($slider->image) {
            //         $path = 'upload/slider/' . $slider->image;
            //         if (File::exists($path)) {
            //             unlink($path);
            //         }
            //     }
            //     $PhotosDir = 'upload/slider/';
            //     if (!file_exists($PhotosDir)) {
            //         mkdir($PhotosDir, 0777, true);
            //     }
            //     $file = $request->file('image');
            //     $filename = $request->title . '-' . time() . rand() . '.webp';
            //     $file->move('upload/slider/', $filename);
            //     $slider->image = $filename;
            // }

            $result = $slider->save();
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

    public function show(Slider $slider)
    {
        //
    }

    public function edit( $id)
    {
        $slider = Slider::where('id', $id)->first();
        return view('backend.slider.add_slider', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        //
    }

    public function destroy(Slider $slider)
    {
        try {
            $slider = Slider::where('id', $slider->id)->first();
            $path = 'upload/slider/' . $slider->image;
            if ($slider->image) {
                if (File::exists($path)) {
                    unlink($path);
                }
            }
            $slider->delete();
            return response()->json(array('success' => 1, "errorMessage" => 'Slider Master Deleted'));
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json(array('success' => 0, "errorMessage" => 'Error'));
        } catch (\Exception $e) {
            return response()->json(array('success' => 0, "errorMessage" => 'Server Error'));
        }
    }
}
