<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return DataTables::of(Product::orderBy('id', 'ASC'))
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $html = '<td><div class="acton-data">';
                    $html .= '<a href="' . route('product.edit', $row->id) . '" class=" avatar btn-edit p-50 m-0 text-primary" data-bs-toggle="tooltip" data-placement="left" title="Edit"><i class="fa fa-edit"></i></a>';
                    $html .= '<a data-id="' . $row->id . '" href="javascript:void(0);" id="confirm-text" class="avatar bg-light-danger p-50 m-0 text-danger delete" data-bs-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash"></i></a>';
                    $html .= '</div></td>';
                    return $html;
                })
                ->editColumn('image', function ($row) {
                    $html = '<td>';
                    if ($row->image != '' && $row->image != null) {
                        $html .= '<a href="' . asset('upload/product/' . $row->image) . '" data-fancybox="gallery_' . $row->id . '" data-caption="' . $row->title . '" class="gallary-item-overlay">';
                        $html .= '<img class="img-fluid rounded" height="35" width="35" src="' . asset('upload/product/' . $row->image) . '" alt="' . $row->title . '" title="' . $row->title . '">';
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
                ->rawColumns(['action', 'image','description'])
                ->make(true);
        } else {
            return view('backend.product.view_product');
        }
        // return view('backend.product.view_product');
    }

    public function create()
    {
        return view('backend.product.add_product');
    }

    public function store(Request $request)
    {
        if (!is_null($request->product_id)) {
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
            if (!is_null($request->product_id)) {
                $product = Product::where('id', $request->product_id)->first();
                $response = ['data' => route('product.index'), 'status' => true, 'message' => ' Product Updated Successfully.'];
            } else {
                $product = new Product();
                $response = ['data' => route('product.index'), 'status' => true, 'message' => ' Product Added Successfully.'];
            }
            $product->title = $request->title;
            $product->slug = $this->test(Str::slug($request->title, '-'), 0, null);
            $product->description = $request->description;
            if ($request->hasfile('image')) {
                //image update than old image remove
                if ($product->image) {
                    $path = 'upload/product/' . $product->image;
                    if (File::exists($path)) {
                        unlink($path);
                    }
                }
                $PhotosDir = 'upload/product/';
                if (!file_exists($PhotosDir)) {
                    mkdir($PhotosDir, 0777, true);
                }
                $file = $request->file('image');
                $filename = $request->title . '-' . time() . rand() . '.webp';
                $file->move('upload/product/', $filename);
                $product->image = $filename;
            }

            $result = $product->save();
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

    public function show(Product $product)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        return view('backend.product.add_product', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        try {
            $product = Product::where('id', $product->id)->first();
            $path = 'upload/product/' . $product->image;
            if ($product->image) {
                if (File::exists($path)) {
                    unlink($path);
                }
            }
            $product->delete();
            return response()->json(array('success' => 1, "errorMessage" => 'Product Master Deleted'));
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json(array('success' => 0, "errorMessage" => 'Error'));
        } catch (\Exception $e) {
            return response()->json(array('success' => 0, "errorMessage" => 'Server Error'));
        }
    }

    public function test($slug, $i = 0, $id)
    {
        $slug_old = $slug;
        if ($i != 0) {
            $slug = $slug . '-' . $i;
        }
        $product = Product::select('slug')->where('slug', $slug)
            ->where(function ($query) use ($id) {
                if (!is_null($id)) {
                    return $query->where('id', '!=', $id);
                }
            })->orderBy('id', 'desc')->count();
        if ($product > 0) {
            return $this->test($slug_old, $i + 1, $id);
        } else {
            return $slug;
        }
    }
    
}
