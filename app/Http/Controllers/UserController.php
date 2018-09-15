<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index () {
        $users = User::all()->toArray();

        return response()->json([
            'status' => 'ok',
            'data' => $users
        ]);
    }

    public function store ( Request $request ) {
        $status = 'error';
        $data = null;

        if (
            ! empty($request->get('email')) &&
            ! empty($request->get('password')) &&
            ! empty($request->get('name')) &&
            ! empty($request->get('cellphone'))
        ) {
            $user = new User();
            $user->email = $request->get('email');
            $user->password = $request->get('password');
            $user->name = $request->get('name');
            $user->cellphone = $request->get('cellphone');

            if ( $user->save() ) {
                $status = 'ok';
                $data = $user;
            }
        }

        return response()->json([
            'status' => $status,
            'data' => $data
        ]);
    }
}
