<?php

namespace App\Http\Controllers;

use App\restores\index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class User extends Controller
{

    public function show()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [

                'username' => 'required|min:6|max:30|alpha',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
        }
    }
}
