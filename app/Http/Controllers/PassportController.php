<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class PassportController extends Controller
{
    public $successStatus = 200;
    /*
     * Login api
     * @return \Illuminate\Http\Res
     */
    public function login(){
        if(Auth::attempt(['email' => \request('email'), 'password' => \request('password')])){
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->accessToken;
            return response()->json(['success' => $success], $this->successStatus);
        }else{
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    public function register(Request $request){
        $validator = $request->validate([
           'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password'
        ]);
        if(!$validator){
            return response()->json(['error' => $validator->errors()], 401);
        }



        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =bcrypt($request->password);

        $user->save();

        $success['token'] = $user->createToken('MyApp')->accessToken;
        $success['name'] = $user->name;
        return response()->json(['success' => $success], $this->successStatus);
    }

    public function getDetails(){
        $user = Auth::user();
        return response()->json(['success'=>$user], 200);
    }
}
