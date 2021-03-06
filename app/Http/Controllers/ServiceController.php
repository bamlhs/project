<?php

namespace App\Http\Controllers;

use App\Contact;
use App\HomeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function Laundries(){

        return view('files.laundry');
    
    }
    public function Hotels(){
    

        return View::make('files.hotels');
    
    }
    
    public function GetHomeService(){
    
        // $services = HomeService::all();
        // return $services;
        return view('files.home');
    
    }
    
    public function Home(){        
        return view('files.home');
    }
    
    public function StoreHome(Request $request){
    
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'phone' => 'required|phone:sa',
                'address' => 'required',
            ]);
            if ($validator->fails()) {
                Session::flash('error', $validator->messages()->first());
                return redirect()->back()->withInput();
           }
    
           if ($validator->fails()) {
    
            if($request->ajax())
            {
                return response()->json(array(
                    'success' => false,
                    'message' => 'There are incorect values in the form!',
                    'errors' => $validator->getMessageBag()->toArray()
                ), 422);
            }
    
            $this->throwValidationException(
    
                $request, $validator
    
            );
    
        }
    
           $home = new HomeService;
    
           $home->name = $request->name;
           $home->phone = $request->phone;
           $home->address = $request->address;
           if(Auth::check()){
               $home->user_id = Auth::id();
           }
    
           $home->save();
    
           return redirect()->back()->with("success", "success");
    
        }
    
    
    }
    
    
    
    
    public function Book(){
    

        return view('files.book');
    
    }
    
    
    
        public function Tools()
        {

            // $config = app( '\Aimeos\Shop\Base\Context' )->get()->getConfig();
            // $config->set( 'client/html/basket/mini', ['basket/mini'] );
            // $params = app( 'Aimeos\Shop\Base\Page' )->getSections( 'tools' );
            // $params = app('shop.page' )->getSections( 'tools' );
            return \View::make('files.tools');
        }


        public function contact(Request $request){
            if ($request->isMethod('post')) {
                $validator = Validator::make($request->all(), [
                    'name' => 'required',
                    'phone' => 'required',
                    'subject' => 'required',
                    'mail' => 'required',
                    "msg" => "required"
                ]);
                if ($validator->fails()) {
                    Session::flash('error', $validator->messages()->first());
                    return redirect()->back()->withInput();
               }
        
               $contact = new Contact;
    
               $contact->name = $request->name;
               $contact->phone = $request->phone;
               $contact->mail = $request->mail;
               $contact->subject = $request->subject;
               $contact->message = $request->msg;
               $contact->save();
    
               return redirect()->back()->with("success", "success");
            }
        }
}
