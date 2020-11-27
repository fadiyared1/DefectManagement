<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\defect;
//use Illuminate\Support\Facades\URL;
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
        return view('user.defectcreate')->with('var1',$var1)->with('var2',$var2);
    }
}
