<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Support;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sup=Support::where('user_id',Auth::User()->id)->where('hide',0)->orderBy('id','desc')->get();
        return view('home')->withSup($sup);
    }
    public function supportPost(Request $request){
        $sup=new Support();
        $sup->user_id=Auth::User()->id;
        $sup->subject=$request->subject;
        $sup->message=$request->message;
        $sup->reply="Thank you for submitting the query, our support team will reply you in a short while.";
        $sup->save();
  return redirect()->back();
     }

     public function removeSup($id){
        $sup=Support::findOrfail($id);
        $sup->hide=1;
        $sup->update();
        return redirect()->back();
      }
    /**
     * Show the Team Management Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage(Request $request,$sort=null,$count=null)
    {
        $sort= $request->input('sort');
        $name=$sort;
        $stud = Student::where('house',2)->get();
        if($sort){
            $sort = Student::where('house',2)->where($sort ,'!=', 'NULL')->get();
            $count =Student::where('house',2)->where($name ,'!=', 'NULL')->count();
        }
        return view('manage')->withStud($stud)->withSort($sort)->withName($name)->withCount($count);
    }

    public function upload(Request $request){
        //$file = new Upload();
        //$title=$request->get('subject');
        //if (Input::file('files')->isValid()) {
      // $destinationPath = 'files'; // upload path
       //$extension = Input::file('files')->getClientOriginalExtension(); // getting file extension
       //$fileName = uniqid().'.'.$extension; // renameing
       //Input::file('files')->move($destinationPath, $fileName);
       //$file->subject = $title;
       //$file->chapter=$request->get('chapter');
       //$file->location=$fileName;
       //$file->save();
     //}
     return redirect()->back();
    }
}
