<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller {
    function index() {
        $data = ['activeHome' => 'active'];
        return view('main.index', $data);
    }
}