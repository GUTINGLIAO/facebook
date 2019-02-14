<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;
use Auth;

class StatusesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request) {
        $this->validate($request, [
           'content' => 'required|max:140'
        ]);
        Auth::user()->statuses()->create([
            'content' => $request['content']
        ]);
        session()->flash('success', 'successfully released');
        return redirect()->back();
    }
    public function destroy(Status $status) {
        $this->authorize('destroy', $status);
        $status->delete();
        session()->flash('success', 'successfully deleted');
        return redirect()->back();
    }
}
