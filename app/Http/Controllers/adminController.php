<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
         $this->AdminAuthCheck();
        return view('secure_panel.admin_login');
    }

    public function adminLogin(Request $request)
    {   
        $email = $request->email;
        $password = $request->password;
        
        $result = DB::table('admin')
                    ->where('email',$email)
                    ->where('password',md5($password))
                    ->first();
                    
                    if($result){
                        Session::put('admin_name',$result->admin_user);
                        Session::put('id',$result->id);
                       
                        return Redirect::to('/dashboard');
                    }else{
                        Session::put('msg','Email and Password Invalid!');
                        return Redirect::to('/secure_panel');
                    }
                      
        

        return view('secure_panel.admin_master');
    }

 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function AdminAuthCheck()
    {
        //
        $id = Session::get('id');
        if($id){
            return Redirect::to('/dashboard')->send(); 
        }else{
            return;
        }
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
