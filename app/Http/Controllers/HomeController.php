<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;
use App\message;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function show(){
    $user = auth()->user();
           
    
            return view('userprofile',compact('user'));
    }
 
    public function ind()
    {
        //
        //$fed=fedback::all();
     //   $user = User::orderBy('id', 'ASC')->get();
     $user=User::all();
        return view('admin.student_details',compact('user'));
    }

    public function edit(Request $request){
        if(Auth::user()){
            $user=User::find(Auth::user()->id);
            if($user){  
            return view('editprofile',compact('user'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect()->back();
        }
    }
    public function update(Request $request){
        $user=User::find(Auth::user()->id);
        if($user){
            $user->name=$request['name'];
            $user->secondname=$request['secondname'];
            $user->email=$request['email'];
            $user->contact=$request['contact'];
            $user->save();
            return redirect('/profile');
        }
        else{
            return redirect()->back();
        }
    }
    public function search(Request $request){
       
        $search = $_GET['search'];
    
        $user = User::where('name', 'LIKE', '%'.$search.'%')->get();
    
        return view('admin.student_details',compact('user'));
    
    
        }
        public function msg(){
            $users = DB::table('messages')
                         ->selectRaw('count(status)as count')
                         ->where('status', 'no')
                         ->where('username',Auth::user()->name)
                         ->where('sender', 'admin')
                         ->get();
                         
                        
                           // $users ->status=request('status');
                            DB::update("update messages set status ='yes' where username='Auth::user()->name' and sender='admin';");
                            
                        
                         return view('home',compact('users'));
                       
                 
                         
        }
}
