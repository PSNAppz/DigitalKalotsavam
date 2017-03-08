<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Support;
use Auth;
use App\DisqualifiedList as DL;
use App\Upload;
use Illuminate\Support\Facades\Input;

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
        $id=Auth::User()->id;
        if($id==1){
            $dl = DL::where('house',"Amritamayi")->get();
        }
        elseif($id==2){
            $dl = DL::where('house',"Jyothirmayi")->get();
        }
        elseif($id==3){
            $dl = DL::where('house',"Anandamayi")->get();

        }
        elseif($id==4){
            $dl = DL::where('house',"Chinmayi")->get();
        }
        else{
          $dl = DL::get();
        }
        $sort= $request->input('sort');
        $name=$sort;
        $stud = Student::where('house',$id)->get();
        if($sort){
            $sort = Student::where('house',$id)->where($sort ,'!=', 'NULL')->get();
            $count =Student::where('house',$id)->where($name ,'!=', 'NULL')->count();
        }
        return view('manage')->withStud($stud)->withSort($sort)->withName($name)->withCount($count)->withDl($dl);
    }
    public function viewUpload(){
        $success=0;
        return view('upload')->withSuccess($success);
    }

    public function upload(Request $request){
        $success=0;
        $file = new Upload();
        $title=$request->get('subject');
        if (Input::file('files')->isValid()) {
        $destinationPath = 'files'; // upload path
        $extension = Input::file('files')->getClientOriginalExtension(); // getting file extension
        $fileName = uniqid().'.'.$extension; // renameing
        Input::file('files')->move($destinationPath, $fileName);
        $success=1;
        $file->name = $title;
        $file->owner= Auth::User()->id;
        $file->location=$fileName;
        $file->save();
      }
     return view('upload')->withSuccess($success);
    }
}
