<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB; 

class adminSuperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->AuthCheck();
        return view('secure_panel.admin_master'); 
    }

    public function admin_logout(){
        Session::put('admin_name','');
        Session::put('id','');
        Session::put('logout','You Are Succesfully Logout');
        return Redirect::to('/secure_panel');
    }

    public function AuthCheck()
    {
        //
        $id = Session::get('id');
        if($id){
            return;
        }else{
            return Redirect::to('/secure_panel')->send(); 
        }
    }
    


    // alluser

    public function AllUser(){
        $this->AuthCheck();

        $result = DB::table('users')
                  ->get();
        $alluser = view('secure_panel.allUser')->with('allUser',$result);
        return view('secure_panel.admin_master')->with('content',$alluser);
    }

    public function viewUser($id){
        $this->AuthCheck();

        $result = DB::table('users')
                  ->select('*')
                  ->where('id',$id)
                  ->first();
        $viewuser = view('secure_panel.viewuser')->with('viewuser',$result);
        return view('secure_panel.admin_master')->with('content',$viewuser);
    }


    public function active($id){
        DB::table('users')
           ->where('id',$id)
           ->update(['active' => 1 ]);
           return Redirect::to('/allUser');
  }
  public function unactive($id){
    DB::table('users')
       ->where('id',$id)
       ->update(['active' => 0 ]);
       return Redirect::to('/allUser');
}

public function delete($id){
    DB::table('users')
       ->where('id',$id)
       ->delete();
       Session::put('delete_user','User Deleted Succesfully......');
       return Redirect::to('/allUser');
}

  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
