<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function Laundries(){

        return view('files.laundry');
    
    }
    public function Hotels(){
    

        return \View::make('files.hotels');
    
    }
    
    public function GetHomeService(){
    
        $services = \App\HomeService::all();
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
                'phone' => 'required',
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
}
