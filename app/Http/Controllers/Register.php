<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Register extends Controller
{
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:posts|max:255',
            'email' => 'required',
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = DB::table('users')->where('name', $request->name)->first();
        if (!$user) {
            $newUser = new User();
            $newUser->name = $request->name;
            $newUser->email = $request->email;
            $newUser->password = $request->password;
            $newUser->save();
            return redirect()->route('index')->with('message', 'regiesr success');
        } else {
            return redirect()->route('index')->with('message', 'regiesr success');
        }
    }
}
