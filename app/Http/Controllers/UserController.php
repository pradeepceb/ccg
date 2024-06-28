<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {

    public function partnerRegistration() {
        return view('partner');
    }

    public function partnerPostRegistration(Request $request) {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'prefix' => 'required',
            'jobcategory' => 'required',
            'workphone' => 'required',
            'cellphone' => 'required',
            'email' => 'required|email|unique:users',            
        ]);

        $data = $request->all();
        $check = $this->update($data);

        return redirect("dashboard")->withSuccess('Great! You have Successfully Registered');
    }

    public function companyRegistration() {
        return view('company');
    }

    public function companyPostRegistration(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('Great! You have Successfully Registered');
    }
}
