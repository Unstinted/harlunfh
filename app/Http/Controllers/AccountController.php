<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Hash;
use Auth;
use Redirect;
use Session;
use Validator;
use Illuminate\Support\Facades\Input;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function getIndex()
    {
        return view ('auth.account');
    }

    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return Redirect('account')->withErrors($validator, 'login')->withInput();
        } else {
            if (Auth::attempt(array(
                'email' => $request->get('email'),
                'password' => $request->get('password')
            ))){
                session([
                    'email' => $request->get('email')
                ]);
                return Redirect('home');
            } else {
                Session::flash( 'message', "Invalid Credentials , Please try again." );
                return Redirect('account');
            }
        }
    }

    public function register(Request $request) {
        $rules = array (
            'name' => 'required|max:255',
            'email' => 'required|unique:users|email',
            'password'=>'required|min:6|confirmed'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect('account')->withErrors($validator, 'register')->withInput();
        } else {
            $user = new User();
            $user->name = $request->get('name');
            $user->email = $request->get('email');
            $user->password = Hash::make($request->get('password'));
            $user->remember_token = $request->get('_token');
            $user->save();
            return Redirect('account')
                ->with('status', "Successful Registered.");
        }
    }
    public function logout() {
        Session::flush ();
        Auth::logout ();
        return Redirect('account');
    }
}
