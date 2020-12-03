<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAddressionController extends Controller
{
    //
    public function index(Request $request){

        return view('user_address.index', [
            'addresses' => $request->user()->addresses,
        ]);
    }
}
