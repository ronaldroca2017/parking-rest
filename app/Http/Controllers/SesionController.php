<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SesionController extends Controller
{
    //
    public function index (Request $request) {
       
    }
    public function store ( Request $request ) {
        $email=$request->get('email');
        $password=$request->get('password');
        $status='error';
        $user=User::select('*')->where('email',$email)
        ->where('password',$password)
        ->first();

        if(!empty($user)){
            $status='ok';
        }
        
        return response()->json([
            'status' => $status,
            'data' => $user
        ]);
    }
}
