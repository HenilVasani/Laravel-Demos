<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use DataTables;
use Carbon\Carbon;
use Validator;
class SellerController extends Controller
{
  

    function fetchyajradata(Request $request)
    {
        $currentDate = Carbon::now();
        $sellers = Seller::query();
        if ($request->ajax()){
            $sellers = Seller::query();
            return Datatables::of($sellers)
            ->setRowClass('{{ $id % 2 == 0 ? "alert-success" : "alert-danger" }}')
           ->toJson();
        }
        return view('yajradata');
       
    }
    function edityajradata($id)
    {
        $data=Seller::find($id);
        return view('yajraedit',['data'=>$data]);
    }
    function updateyajradata(Request $req,$id)
    {
      $data=Seller::find($id);
      $data->name=$req->name;
      $data->email=$req->email;
      $data->Expiry_date($req->expiry_days);
      $data->save();
      return redirect()->route('sellers');
    }

  function createyajradata(Request $req)
  {
   
  $rules=array(
      "name"=>"required",
      "email"=>"required",
      "password"=>"required"
  );
      $validator=Validator::make($req->all(),$rules);
      if($validator->fails())
      {
         return view('yajracreate')
         ->withInput($req->input())
         ->withErrors($validator);
      }
      else{
    $currentDate=Carbon::now();
    $data=new Seller;
    $data->name=$req->name;
    $data->email=$req->email;
    $data->password=$req->password;
    $data->subscription_expiry=$currentDate;
    $data->Expiry_date($req->expiry_days);
    $data->save();
    return redirect()->route('sellers');
  }
  }
  function deleteyajradata($id)
  {  
      // $data=User::find($id);
      $user= Seller::find($id);
      if (!$user) {
          return 'Email not found.';
      }
     $user->delete();
      return redirect()->route('sellers');
  }
}