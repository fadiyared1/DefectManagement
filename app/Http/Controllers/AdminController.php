<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\defect;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;

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
        $defect=defect::all();
        $usr=user::all();
        $array = User::whereRoleIs('expert')->get();//('admin')->orWhereRoleIs('superadmin')->get();
        return view('admin.index')->with('defect',$defect)->with('array',$array)->with('usr',$usr);
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
            /*if(!(Hash::check($request->get('current_password'),Auth::user()->password))){
                return back()->with('error','Your current password does not match with what you provided');
            }
            else */
            return Hi;
        }
        
    }

