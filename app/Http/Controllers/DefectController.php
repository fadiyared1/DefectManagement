<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\defect;
use App\Models\User;
use App\Models\Journal;
use Illuminate\Support\Facades\Auth;
class DefectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($var)
    {
      /*  $defect=defect::all();
        return view('user.defectcreate')->with('defect',$defect);*/
        return $var;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $des=$_GET['description'];
        $exp=$_GET['expectedReason'];
        $id=Auth::user()->id;
        $var1=$_GET['var1'];
        $var2=$_GET['var2'];
        $var3="Problem in ".$var1." ".$var2;
        $defect= new defect;
        $defect->title=$var3;
        $defect->description=$des;
        $defect->expectedReason=$exp;
        $defect->idUser=$id;
        $defect->save();
        $jour=new journal;
        $jour->idDefect=$defect->id;
        $jour->idStatus=1;
        $jour->save();
        return redirect('user')->with('success','Defect has been added successfuly'); 
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
