<?php

namespace App\Http\Controllers;

use App\Mail\UserMail;
use App\Models\About;
use App\Models\Chooseus;
use App\Models\Contact;
use App\Models\Process;
use App\Models\ProcessMeta;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    //shop list rejected(first time)
    public function index()
    {
        $chooseus = Chooseus::first();
        $about = About::first();
        $product = Product::get();
        $slider = Slider::get();
        return view('website.home', compact('slider', 'product', 'about','chooseus'));
    }

    public function home()
    {
        $slider = Slider::get()->count();
        $product = Product::get()->count();
        $contact = Contact::get()->count();
        $process = ProcessMeta::get()->count();
        return view('backend.home',compact('slider','product','contact','process'));
    }

    public function aboutUs()
    {

        $about = About::get();
        return view('website.about', compact('about'));
    }
    public function process()
    {
        $process = Process::with('processmeta')->first();
        return view('website.process', compact('process'));
    }
    public function contactUs()
    {

        return view('website.contact');
    }
    public function product()
    {
        $product = Product::get();
        return view('website.product', compact('product'));
    }
    public function contactSave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'number' => 'required|numeric|digits:10',
            'subject' => 'required',
            'message' => 'required',
        ], [
            'name.required' => 'Enter Name',
            'number.required' => 'Enter Number',
            'subject.required' => 'Enter Subject',
            'message.required' => 'Enter Message',
           
        ]);
        if ($validator->fails()) {
            $response = ['status' => false, 'message' => 'Please Input Proper Data !!', 'errors' => $validator->errors()];
            return response()->json($response);
        }
        DB::beginTransaction();
        try {
            
            $contact = new Contact();
            $response = ['data' => route('contact-us'), 'status' => true, 'message' => 'Successfully Sand Your Message.'];
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->number = $request->number;
            $contact->subject = $request->subject;
            $contact->message = $request->message;
            $result = $contact->save();
            $email = 'ambitionpipes19@gmail.com';
            DB::commit();
            if (!is_null($result)) {
                Mail::to($email)->send(new UserMail($contact));
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

    public function singalProduct($slug)
    {
        $products = Product::get();
        $product = Product::where('slug', $slug)->first();
        return view('website.single_poduct', compact('product','products'));
    }
}
