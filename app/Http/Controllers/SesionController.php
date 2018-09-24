<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class SesionController extends Controller
{
    //
    public function index (Request $request) {
        $email=$request->get(email);
        $password=$request->get(password);
        $status='error';
        $user=DB::table('user as u')->select('u.id,u.nombre')->where('u.email',$email)
        ->where('u.password',$password)
        ->first();

        if(!empty($user)){
            $status='ok';
        }
        
        return response()->json([
            'status' => $status,
            'data' => $user
        ]);
    }
    public function store ( Request $request ) {
        
    }
}
