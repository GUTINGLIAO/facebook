<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Status;

class staticPageController extends Controller
{
    //
    public function home() {
        $feed_items = [];
        if(Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(7);
        }
        return view('staticpages/home', compact('feed_items'));
    }
    public function help() {
        return view('staticpages/help');
    }
    public function about() {
        return view('staticpages/about');
    }
}
