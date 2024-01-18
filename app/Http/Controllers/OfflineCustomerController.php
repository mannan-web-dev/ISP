<?php

namespace App\Http\Controllers;

use App\Models\OfflineCustomer;
use Exception;
use Illuminate\Http\Request;

class OfflineCustomerController extends Controller
{

    public function customerList(){
        $offlineCust = OfflineCustomer::orderBy('id','desc')->paginate(5);
        return response()->json($offlineCust);

    }
    public function addCust(Request $request){
        try {
          return  $data = OfflineCustomer::create([
                "name"=>$request->name,
                "address"=>$request->address,
                "phone"=>$request->phone,
                "email"=>$request->email,
                "accountUserName"=>$request->accountUserName,
                "accountNumber"=>$request->accountNumber,
            ]);
           
        } catch (Exception $e) {
            // return "The customer has not been created";
               return response()->json(["message"=>$e->getMessage()]);
        }
    }

    public function customerView($id){
        $custView= OfflineCustomer::where('id', $id)->first();
        return $custView;
    }


    public function updateCust(Request $request){
        try {
            $id= $request->id;
            OfflineCustomer::where('id', $id)->update([
                "name"=>$request->name,
                "address"=>$request->address,
                "phone"=>$request->phone,
                "email"=>$request->email,
                "accountUserName"=>$request->accountUserName,
                "accountNumber"=>$request->accountNumber,
            ]);
            return response()->json(["message"=>"Customer has been updated"]);
        } catch (Exception $e) {
            return response()->json(["message"=>"something went wrong"]);
        }
        
    }


    public function deleteCust(Request $request){

      
        try {
            $id = $request->input('id');
            $offlineCust = OfflineCustomer::where('id',$id)->delete();
            if ($offlineCust) {
                return "customer has been deleted";
            }else{
                return "something went wrong"; 
            }
        } catch (Exception $e) {
            return "something went wrong"; 
        }
    
    }
}
