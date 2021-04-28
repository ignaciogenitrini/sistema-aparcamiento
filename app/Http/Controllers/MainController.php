<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('welcome');

        if (auth()->user() == true) {
            redirect()->route('systems.index');
        }
    }
}
