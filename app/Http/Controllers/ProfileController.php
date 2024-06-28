<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class ProfileController extends Controller {

    /**
     * Display the user's profile form.
     */
    public function index() {

        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function update(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $input = array("name" => $request->name, "email" => $request->email);

        $user = Auth::user();

        $user->update($input);

        return back();
    }
}
