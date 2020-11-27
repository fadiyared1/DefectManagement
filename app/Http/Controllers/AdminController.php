<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\defect;
use App\Models\User;
class AdminController extends Controller
{
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
}
