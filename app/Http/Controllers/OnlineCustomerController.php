<?php

namespace App\Http\Controllers;

use App\Models\OnlineCustomer;
use Illuminate\Http\Request;

class OnlineCustomerController extends Controller
{
    public function onlineCustomer(){
       $Onlinecust= OnlineCustomer::orderBy('id', 'desc')->paginate(5);

        return view('admin.Onlinecustomer.index', compact('Onlinecust'));
    }

    public function onlineCustomerCreate(){
       return view('admin.Onlinecustomer.create');
    }

    public function onlineCustCreate(Request $request){
       $data =  OnlineCustomer::create([
            "name"=>$request->name,
            "address"=>$request->address,
            "phone"=>$request->phone,
            "email"=>$request->email,
            "accountUserName"=>$request->accountUserName,
            "accountNumber"=>$request->accountNumber,
        ]);
        $data->save();
        return redirect('/admin/custmoer');

    }

   public function editView(Request $request, $id){
    $id= $request->id;
    $OnlineCust = OnlineCustomer::where('id', $id)->first();
    return view ('admin.Onlinecustomer.edit', compact('OnlineCust'));
   }
   public function onlineCustUpdate(Request $request, $id){
    $id= $request->id;
    OnlineCustomer::where('id', $id)->Update([
        "name"=>$request->name,
        "address"=>$request->address,
        "phone"=>$request->phone,
        "email"=>$request->email,
        "accountUserName"=>$request->accountUserName,
        "accountNumber"=>$request->accountNumber,
    ]);
    return redirect('/admin/custmoer');

   }

    public function delete(Request $request){
        $id = $request->id;
         OnlineCustomer::where('id', $id)->delete();
        return back();
    }
}
