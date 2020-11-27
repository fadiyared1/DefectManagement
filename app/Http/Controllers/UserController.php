<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\defect;
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
    /*public function defectcreate()
    {
        return view('user.defect');
    }*/
}
