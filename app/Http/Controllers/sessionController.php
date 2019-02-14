<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
class sessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }

    public function create() {
        return view('session.create');
    }
    public function store(Request $request) {
        $credential = $this->validate($request, [
            'emal.blade.php' => 'required|emal.blade.php|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt($credential, $request->has('remember'))) {
            if (Auth::user()->activated) {
                session()->flash('success', 'welcome back');
                $fallback = route('users.show', Auth::user());
                return redirect()->intended($fallback);
            } else {
                Auth::logout();
                session()->flash('warning', 'your account is not activated');
                return redirect('/');
            }
        } else {
            session()->flash('danger', 'suck my big dick');
            return redirect()->back()->withinput();
        }
    }
    public function destroy(){
        Auth::logout();
        session()->flash('success', 'successfully log out');
        return redirect()->route('login');
    }
}
