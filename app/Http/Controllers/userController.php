<?php

namespace App\Http\Controllers;


use App\Models\User;
use Exception;
use http\Env\Response;
use Illuminate\Http\Request;

class userController extends Controller
{
//    Registration
    function registration(Request $request)
    {
        try {
            User::create($request->input());

            return response()->json(['status' => 'Success', 'message' => 'User Registration successful']);

        } catch (Exception $exception) {
            return response()->json(['status' => 'failed', 'message' => $exception->getMessage()]);
        }
    }

//    Login
    function login()
    {

    }
}
