<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use App\admin;
use App\message;
use DB;
class admincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            $users = DB::table('messages')
                         ->selectRaw('count(status)as count')
                         ->where('status', 'no')
                         ->where('sender', 'student')
                         ->get();
                         
                        
                           // $users ->status=request('status');
                           // DB::update("update messages set status ='yes' where username='Auth::user()->name' and sender='admin';");
                            
                        
                        // return view('admin.front',compact('users'));
                       
                 
                         
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.admin_register');
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
        $admin=new admin();
        $admin->first=request('firstname');
        $admin->last=request('lastname');
        $admin->username=request('username');
        $admin->password=request('password');
        $admin->email=request('email');
        $admin->contact=request('con');
        $admin->save();
        return redirect('/dashboard');
    
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
        
    }
    public function login()
    {
        
        return redirect('/admin/login');
        
    }
   
        
   
    public function books(){
        return view('admin.books');
       } 
}
