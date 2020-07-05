<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Auth;
use App\issuebook;
use App\Book;
use Illuminate\Http\Request;
use DB;
class issuebookcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $book=issuebook::all();
        return view('admin.reqinfo',compact('book'));
    }
    public function index2()
    {
        //
        if(Auth::user()){
        
        $books=issuebook::where('username',Auth::user()->name)->get();
        return view('stubookrequest',compact('books'));
        }
        else{
            echo "need to login";
        }
    }
    
    public function index1(){
    
        $books=DB::table('issuebooks')
        ->join('books','books.bid','=','issuebooks.bid')
        ->join('users','users.name','=','issuebooks.username')
       ->select('issuebooks.username','books.bid','books.name','books.authors','books.edition','books.status')
       ->get();
    return view('admin.reqinfo', compact('books'));
    }
    public function issueinfo(Request $request){
       
        
        $books=DB::table('issuebooks')
        ->join('books','books.bid','=','issuebooks.bid')
        ->join('users','users.name','=','issuebooks.username')
       ->select('issuebooks.username','users.id','books.bid','books.name','books.authors','books.edition','issuebooks.issue','issuebooks.returns')
       ->where('issuebooks.approve','yes')->orderby('returns','ASC')
       ->get();
     
      $now = Carbon::now()->toDateString();
       $books ->returns=request('returns');
    DB::update("update issuebooks set approve ='expired' where returns<'$now';");
    return view('issueinfo', compact('books'));
        
}
public function expired(){
    $books=DB::table('issuebooks')
    ->join('books','books.bid','=','issuebooks.bid')
    ->join('users','users.name','=','issuebooks.username')
   ->select('issuebooks.username','users.id','books.bid','books.name','books.authors','books.edition','issuebooks.issue','issuebooks.approve','issuebooks.returns')
   ->where('issuebooks.approve','expired')->orderby('returns','ASC')
   ->get();

   if(isset($_POST['submit'])){
   $books ->returns=request('returns');
   DB::update("update issuebooks set approve ='returned' where username='$_POST[uname]' and bid='$_POST[bid]';");
   DB::update("update books SET quantity=quantity+1  WHERE  bid='$_POST[bid]';");
 
   } 
   else{
    $now = Carbon::now()->toDateString();
    $books ->returns=request('returns');
 DB::update("update issuebooks set approve ='expired' where returns<'$now';");
   }
   return view('expiredlist', compact('books'));
  
   
}
public function returned(){
    $book=DB::table('issuebooks')
        ->join('books','books.bid','=','issuebooks.bid')
        ->join('users','users.name','=','issuebooks.username')
       ->select('issuebooks.username','users.id','books.bid','books.name','books.authors','books.edition','issuebooks.approve','issuebooks.issue','issuebooks.returns')
       ->where('issuebooks.approve','returned')->orderby('returns','ASC')
       ->get();
    return view('returned', compact('book'));
  
   
  
}
  
    public function fine(){
        $books = DB::table('issuebooks')
        ->select('issuebooks.returns','issuebooks.approve')
       ->where('issuebooks.username',Auth::user()->name )
       ->where('issuebooks.approve','expired')
       ->get();
       return view('stureq',compact('books'));
    }
   
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        //$books = issuebook::join('Book', 'Book.bid', '=', 'issuebook.bid')
        
       
   
        

        return view('books.stubooks');
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
       
        //
      
       
        $issue=new issuebook();
        $issue->username=request('name');
        $issue->bid=request('bid');
        $issue->approve=request('bid');
        $issue->issue=request('bid');
        $issue->returns=request('bid');
       
       

        $issue->save();
        return redirect('/viewreq');
        echo('you have successfully requested book');
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
    public function edit()
    {
        $dbhost = 'localhost:3306';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'librarysis';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
        
        if(! $conn ) {
           die('Could not connect: ' . mysqli_error());
        }
        //echo 'Connected successfully<br>';
        if(isset($_POST['submit'])){
            mysqli_query($conn,"UPDATE issuebooks SET approve='$_POST[approve]',issue='$_POST[issue]',returns='$_POST[returns]' WHERE username='$_POST[uname]' AND bid='$_POST[bid]';");
            mysqli_query($conn,"UPDATE books SET quantity=quantity-1  WHERE  bid='$_POST[bid]';");
            $res=mysqli_query($conn,"SELECT quantity from books where bid='$_POST[bid]';");
            while($row=mysqli_fetch_assoc($res)){
                if($row['quantity']==0 || $row['quantity']<0)
            {
                mysqli_query($conn,"UPDATE books SET status='not-available'  WHERE  bid='$_POST[bid]';");
            }
            else{
                mysqli_query($conn,"UPDATE books SET status='available'  WHERE  bid='$_POST[bid]';");  
            }
            }
            return redirect('/viewreqinfo');

  
        }
        mysqli_close($conn);

        



       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
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
