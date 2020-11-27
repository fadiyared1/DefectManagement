<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\defect;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

use App\Providers\RouteServiceProvider;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = '/expert';
    public function __construct()
    {
        $this->middleware('role:administrator|superadministrator');
    }
    public function index()
    {
        $defect=defect::all();
        $user=User::all();
        return view('admin.index')->with('defect',$defect)->with('user',$user);
    }
    public function changepass()
    {
        return view('admin.changepass');
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
        

        $user= users::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'phonenb' => $data['phonenb'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $user->attachRole('expert');
        return $user;   

        }
}
