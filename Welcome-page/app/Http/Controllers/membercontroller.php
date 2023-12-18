<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class membercontroller extends Controller
{
    function data(){
        $user =member::all();
        return view("membersdata",['users'=>$user]);
}
function savedata(Request $req)
{
    $data=new member;
    $data->first_name=$req->first_name;
    $data->last_name=$req->last_name;
    $data->gender=$req->gender;
    $data->save();

 
}
    
}