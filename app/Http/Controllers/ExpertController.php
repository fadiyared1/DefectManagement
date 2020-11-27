<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:expert');
    }
    public function index()
    {
        return view('expert.index');
    }
    public function view()
    {
        return view('expert.view');
    }
    public function oldDefects()
    {
        return view('expert.oldDefects');
    }
    public function changepass()
    {
        return view('expert.changepass');
    }
}
