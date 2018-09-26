<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class GetUsuarioController extends Controller
{
    //
    public function index (Request $request) {
        $users = User::all()->toArray();
     }
  
     public function store ( Request $request ) {
        $id=$request->get('id');
        $status='error';
        $user=User::select('*')->where('id',$id)
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

