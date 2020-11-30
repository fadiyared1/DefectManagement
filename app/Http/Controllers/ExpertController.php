<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Models\defect;
use App\Models\status;
use App\Models\journal;
use App\Models\assignment;


class ExpertController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:expert');
    }
    public function index()
    {   
        $u1=Auth::user();
        $jour=journal::all();
        $assig=assignment::all();
        $stat=status::all();
        $defect=defect::join('assignment','defect.id','=','assignment.idDefect')->where('assignment.idExpert','=',$u1->id)->get();
        return view('expert.index')->with('defect',$defect)->with('assig',$assig)->with('jour',$jour)->with('u1',$u1);

        
    }
    public function view($id)
    {  $jour = journal::where('idDefect',$id)->first();
        $def = defect::where('id', $id)->first();
        return view('expert.view')->with('defect',$def)->with('jour',$jour);
    }
  /*  public function viewdes(Request $request)
    {
        $id=$request->$_GET
        return view('expert.view')-;
    }*/
    public function oldDefects()
    {
        $u1=Auth::user();
        $jour=journal::all();
        $assig=assignment::all();
        $stat=status::all();
        $defect=defect::join('assignment','defect.id','=','assignment.idDefect')->where('assignment.idExpert','=',$u1->id)->get();
        return view('expert.oldDefects')->with('defect',$defect)->with('assig',$assig)->with('jour',$jour)->with('u1',$u1)->with('stat',$stat);
    }
    public function changepass()
    {
        return view('expert.changepass');
    }
    public function changepasswd(Request $request){
        if(!(Hash::check($request->get('current_password'),Auth::user()->password))){
            return back()->with('error','Your current password does not match with what you provided');
        }
        if(strcmp($request->get('current_password'),$request->get('new_password')) == 0){
            return back()->with('error','Your new password cannot be the same as the old password');
        }
        $request->validate([
            'current_password'=>'required',
            'new_password' => 'required|string|min:8|confirmed'
        ]);
        $user=Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();
        return back()->with('success','Password changed successfully');
        
    }
    public function assign(){
        $def=$_GET["defect"];
        $ans=$_GET["ad"];
       // $jr=new journal;
        
        $jr=journal::where('idDefect',$def)->first();
        if($ans='accept'){
        $jr->idStatus=3;
        $jr->save();
        return back()->with('success','Defect successfully accpeted!');
        }
        else{
            $jr->idStatus=6;
            $jr->save();
            return back()->with('success','Defect successfully rejected!');
        }
        
        
    }
    public function changestatus(){
        $def=$_GET["defect"];
        $ans=$_GET["status"];
       // $jr=new journal;
        
        $jr=journal::where('idDefect',$def)->first();
        
        if($ans='pending'){
        $jr->idStatus=4;
        $jr->save();
        return back()->with('success','Defect status changed to pending!');
        }
        else if($ans='fixed'){
            $jr->idStatus=5;
            $jr->save();
            return back()->with('success','Defect state changed to fixed!');
        }
        else {
            $jr->idStatus=6;
            $jr->save();
            return back()->with('success','Defect successfully rejected!');
        }
        
        
    }
}
