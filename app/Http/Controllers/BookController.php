<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Book;
use App\issuebook;
use DB;
use Auth;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books=Book::all();
        return view('books.view_books',compact('books'));
       // 
    }
   
    public function index1(Request $request)
    {
       
     //$d=date("Y-m-d");
   // $book->returns=request('returns');
   // print_r($book);
    //$now = Carbon::now()->toDateString();
    
        //print_r($now);
       


       
                
   //echo "<h3>your fine is :</h3>"." " ."$".($days*0.1);
   $books=Book::all(); 
      
        return view('books.stubooks',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('books.add_books');
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
        $books=new book();
        $books->name=request('name');
        $books->authors=request('authors');
        $books->edition=request('edition');
        $books->status=request('status');
        $books->quantity=request('quantity');
        $books->department=request('department');
       

        $books->save();
        return redirect('/view_product');
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
    public function edit(Request $request , $bid=null)
    {
        //
        if($request->isMethod('post')){
            $data=$request->all();
            //echo "<pre>"; print_r ($data);die;
           Book::where(['bid'=>$bid])->update(['name'=>$data['name'],'authors'=>$data['authors'],'edition'=>$data['edition'],'status'=>$data['status'],'quantity'=>$data['quantity'],'department'=>$data['department']
           ]);
            return redirect('/view_product')->with('msg','edited successfully');;
        }
        $books=Book::where(['bid'=>$bid])->first();
        return view('books.editbooks',compact('books'));
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
    public function destroy($bid)
    {
        //
        $book=Book::findorfail($bid);
        $book->delete();
        return redirect('/view_product');
    }
    public function search(Request $request){
       
        $search = $_GET['search'];
    
        $books = book::where('name', 'LIKE', '%'.$search.'%')->get();
    
        return view('books.stubooks',compact('books'));
    
    
        }
}
