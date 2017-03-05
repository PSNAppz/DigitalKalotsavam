<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support;
use App\Registered_Event as Re;
use App\Student;
use DB;
use App\Category;
use App\DisqualifiedList as DL;
use Mail;
use App\MailConfirm as Confirm;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sup = Support::where('replied','0')->orderBy('id','desc')->get();
      $dl = DL::get();
      return view('Admin.home')->withSup($sup)->withDl($dl);
    }
    /**
     * Show the Team Management Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function registration(Request $request,$sort=null,$count=null)
    {
        $sort= $request->input('sort');
        $name=$sort;
        $stud = Student::get();
        if($sort){
            $sort = Student::where($sort ,'!=', 'NULL')->get();
            $count =Student::where($name ,'!=', 'NULL')->count();
        }
        return view('Admin.registration')->withStud($stud)->withSort($sort)->withName($name)->withCount($count);
    }


    public function register(){
        $Stud= Student::get();
        $Re= Re::truncate();
        foreach($Stud as $s){
            if($s->classical_dance_boys){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=1;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->classical_dance_girls){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=2;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->semi_classical_dance_boys){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=3;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->semi_classical_dance_girls){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->fancy_dress_boys){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->fancy_dress_girls){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->monoact_boys){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->monoact_girls){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->mimicry_boys){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->mimicry_girls){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->kadhaprasangam){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->shakespearean_monologue){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->elocution_english){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->elocution_malayalam){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->elocution_telugu){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->elocution_sanskrit){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->recitation_english){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->recitation_malayalam){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->recitation_hindi){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->recitation_telugu){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->recitation_sanskrit){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->classical_music_boys){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->classical_music_girls){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->light_music_boys){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->light_music_girls){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->western_solo_boys){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->western_solo_girls){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->instrument_percussion){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->instrument_string){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->instrument_wind){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->instrument_piano){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->karaoke_boys){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->karaoke_girls){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->ashtapadi_boys){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->ashtapadi_girls){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->mappilapattu_boys){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->mappilapattu_girls){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->kadhakali_sangeetham_boys){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->kadhakali_sangeetham_girls){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->story_writing_english){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->story_writing_malayalam){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->essay_writing_english){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->essay_writing_malayalam){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->essay_writing_tamil){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->poetry_writing_english){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->poetry_writing_malayalam){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->poetry_writing_telugu){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->hindi_essay){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->water_cooling){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->cartooning){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->pencil_drawing){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->paper_collage){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->face_painting){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->rangoli){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
            if($s->clay_modeling){
                $re= new Re();
                $re->rollno=$s->rollno;
                $re->eventid=4;
                $testing= Category::where('id',$re->Event->category_id)->get();
                $re->categoryid=$testing[0]->id;
                $re->save();
            }
        }
        return redirect()->route('admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function RuleCheck()
    {
        $R= Student::get();
        DL::truncate();
        foreach($R as $std){
            $Group=Re::where('rollno',$std->rollno)->where('categoryid',3)->count();
            if($Group>1){
                $Dl=new DL();
                $Dl->name=$std->name;
                $Dl->rollno=$std->rollno;
                $Dl->type="Group Event";
                if($std->house==1){
                    $Dl->house="Amritamayi";
                }
                elseif($std->house==2){
                    $Dl->house="Jyothirmayi";
                }
                elseif($std->house==3){
                    $Dl->house="Anandamayi";
                }
                else{
                    $Dl->house="Chinmayi";
                }
                $Dl->save();
            }
            $Onstage=Re::where('rollno',$std->rollno)->where('categoryid',1)->count();
            if($Onstage>1){
                $Dl=new DL();
                $Dl->name=$std->name;
                $Dl->rollno=$std->rollno;
                $Dl->type="On-Stage Event";
                if($std->house==1){
                    $Dl->house="Amritamayi";
                }
                elseif($std->house==2){
                    $Dl->house="Jyothirmayi";
                }
                elseif($std->house==3){
                    $Dl->house="Anandamayi";
                }
                else{
                    $Dl->house="Chinmayi";
                }
                $Dl->save();
            }
            $Offstage=Re::where('rollno',$std->rollno)->where('categoryid',2)->count();
            if($Offstage>1){
                $Dl=new DL();
                $Dl->name=$std->name;
                $Dl->rollno=$std->rollno;
                $Dl->type="Off-Stage Event";
                if($std->house==1){
                    $Dl->house="Amritamayi";
                }
                elseif($std->house==2){
                    $Dl->house="Jyothirmayi";
                }
                elseif($std->house==3){
                    $Dl->house="Anandamayi";
                }
                else{
                    $Dl->house="Chinmayi";
                }
                $Dl->save();
            }
        }
        return redirect()->back();

    }
    public function valform(){
        $true=0;
        return view('Admin.validate')->withTrue($true);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function val(Request $request)
    {
        $id= $request->input('id');
        $cnfrm=0;
        $cnfrm =Confirm::where('secret',$id)->get();
        $true=0;
        if($cnfrm){
            $true=1;
                $results=Student::where('rollno',$cnfrm[0]->rollno)->get();
                $events=DB::select(DB::raw("select * from events where id in (select eventid from registered__events where rollno = '".$cnfrm[0]->rollno."')"));
        }
        else{
            $results=NULL;
            $true=3;
        }


        return view('Admin.validate')->withResults($results)->withTrue($true)->withEvents($events);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sendmail()
    {
        $s= Student::get();
        foreach($s as $u){
            $check=0;
            $check= Confirm::where('rollno',$u->rollno)->count();
            if(!$check){
            $user = $u->name;
            $email =$u->email;
            $id=uniqid();
            $events=DB::select(DB::raw("select * from events where id in (select eventid from registered__events where rollno = '".$u->rollno."')"));
            $cnfrm = new Confirm();
            $cnfrm->name=$user;
            $cnfrm->rollno=$u->rollno;
            $cnfrm->email=$email;
            $cnfrm->secret=$id;

            Mail::send('Admin.regmail', ['user' => $user, 'id' => $id,'email' => $email,'events'=>$events], function($message) use ($email)
            {
                $message->from('kalotsavam@gmail.com', 'Kalotsavam Committee');
                $message->subject('Amrita Kalotsavam 2k17 | Participation Confirmation');
                $message->to($email);

            });
            $cnfrm->save();

            }
        }

        return redirect()->back();
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

    public function reply(Request $request,$id){
     $sup = Support::findOrfail($id);
     $sup->reply=$request->reply;
     $sup->replied=1;
     $sup->hide=0;
     $sup->update();
     return redirect()->back();
   }

   public function removeSup($id){
      $sup=Support::findOrfail($id);
      $sup->delete();
      return redirect()->back();
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
