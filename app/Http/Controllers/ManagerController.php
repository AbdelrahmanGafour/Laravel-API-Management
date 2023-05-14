<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function insert(Request $request){
        try{
            Manager::class([
            'name' => $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'password'=> bcrypt($request->password),
            'address' => $request->address,
            ]);

            return "Data Inserted Successfully";
        }catch(\Exception $e){
            return $e;
        }
    }
}
