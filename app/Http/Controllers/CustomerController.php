<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CustomerController extends Controller
{
    public function index()
    {
      
        return view('admin.layouts.customers');
    }
    function getcustomerdata(){
        return User::orderBy('id','asc')->get();
    }
    public function editCustomerData(Request $req)
    {
        $data = User::find($req->id);
        return response()->json($data);
    }

    public function updateCustomerData(Request $req)
    {
        $user = User::find($req->id);
        if ($user) {
            $user->role = $req->role;
            $user->save();

            return response()->json(['status' => 'success', 'message' => 'User updated successfully']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'User not found']);
        }
    }
}
