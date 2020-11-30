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
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Auth;

class AdminController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = '/admin';
    
    public function __construct()
    {
        $this->middleware('role:administrator|superadministrator');
    }
    public function index()
    {   
        $jour=journal::all();
        $defect=defect::all();
        $status=status::all();
        //$defect = defect::join('journal','defect.id','=','journal.idDefect')->where('idStatus',1)->get();
        $usr=User::join('defect','Users.id','=','defect.idUser')->get();
        $array = User::whereRoleIs('expert')->get();//('admin')->orWhereRoleIs('superadmin')->get();
        return view('admin.index')->with('defect',$defect)->with('array',$array)->with('usr',$usr)->with('jour',$jour)->with('status',$status);
    }
    public function adview($id)
    {   $jour = journal::where('idDefect',$id)->first();
        $def = defect::where('id', $id)->first();
        return view('admin.view')->with('defect',$def)->with('jour',$jour);
    }
    public function olddef()
    {
        return view('admin.oldDefects');
    }

    public function addExpert()
    {
        return view('admin.addExpert');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'phonenb' => ['required','string','max:11'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
        ]);    
    }

        protected function create(array $data)
        {
            $user= user::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'phonenb' => $data['phonenb'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $user->attachRole('expert');
        return $user;   

        }
        public function adregister(Request $request)
        {
            $this->validator($request->all())->validate();
            event(new user($user = $this->create($request->all())));
           // $this->guard()->login($user);
            //return $this->registered($request, $user)
          //   ?: redirect($redirectTo);
            //return redirect($redirectTo);
        }
        public function changepass()
        {
            return view('admin.changepass');
        }

        public function changepassword(Request $request){
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
            $exp=$_GET["expert"];
            $def=$_GET["defect"];
            $assign= new assignment;
            $assign->idExpert=$exp;
            $assign->idDefect=$def;
            $assign->save();
            $jr=new journal;
            $jr=journal::where('idDefect',$def)->first();
            $jr->idStatus=2;
            $jr->save();
            return back()->with('success','Defect successfully assigned!');
        }
        
    }

