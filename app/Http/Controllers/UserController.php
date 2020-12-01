<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\defect;
use App\Models\User;
use App\Models\Role;
use App\Models\Journal;
use App\Models\Assignment;
use App\Models\Status;
use Illuminate\Support\Facades\Hash;
use Auth;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user');
    }
    public function index()
    {
        return view('user.index');
    }
    public function defect()
    {
        $var=$_GET["room"];
        $arr=explode("_", $var);
        $var1=$arr[0];
        $var2=$arr[1];
        if($var2=="other")
        {
            return view('user.defectothercreate')->with('var1',$var1)->with('var2',$var2);
        }
        else
        {
            return view('user.defectcreate')->with('var1',$var1)->with('var2',$var2);
        }
        
    }
   
    public function olddef(){
        $assig=assignment::all();
        $jour=journal::all();
        $defect=defect::all();
        $status=status::all();
        $usr=User::all();
        $array = User::whereRoleIs('expert')->get();//('admin')->orWhereRoleIs('superadmin')->get();
        return view('user.olddef')->with('defect',$defect)->with('array',$array)->with('usr',$usr)->with('jour',$jour)->with('status',$status)->with('assig',$assig);
    }
    public function viewu($id)
    {  $jour = journal::where('idDefect',$id)->first();
        $def = defect::where('id', $id)->first();
        return view('user.view')->with('defect',$def)->with('jour',$jour);
    }
     public function changepa()
    {
        return view('user.changepass');
    }
    public function changep(Request $request){
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
}
