<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Messsage;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }
    public static function getsetting()
    {
        return Setting::first();
    }

    public function index()
    {
        $setting=Setting::first();
        $slider=Product::select('id','title','image','price','slug')->limit(8)->get();
        $data=[
          'setting'=>$setting,
          'slider'=>$slider,
          'page'=>'home'

        ];
        return view('home.index',$data);
    }

    public function product($id,$slug)
    {
        $data=Product::find($id);
        $datalist=Image::where('product_id',$id)->get();
        #print_r($data);
        #exit;
        return view('home.product_detail',['data'=>$data,'datalist'=>$datalist]);
    }

    public function addtocart($id)
    {

        $data=Product::find($id);
        #print_r($data);
        #exit();

    }



    public function aboutus()
    {
        $setting=Setting::first();
        return view('home.about',['setting' => $setting]);
    }
    public function references()
    {
        return view('home.index');
    }
    public function fag()
    {
        return view('home.index');
    }
    public function contact()
    {
        $setting=Setting::first();
        return view('home.contact',['setting' => $setting]);
    }
    public function sendmessage(Request $request)
    {
        $data = new Messsage();
        $data->name= $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect()->route('contact')->with('success','Mesajınız Kaydedilmiştir.');
    }
    public function categoryproducts($id,$slug)
    {
        $data=Product::whereColumn('categort_id',$id)->get;
    }

    public function login()
    {
        return view('admin.login');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(('/'));
    }



    public function logincheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not  match our records.'
            ]);
        } else {
            return view('admin.login');
        }

    }


}


