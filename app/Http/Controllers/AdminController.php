<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:administrator|superadministrator');
    }
    public function index()
    {
        return view('admin.index');
    }
    public function changepass()
    {
        return view('admin.changepass');
    }
}
