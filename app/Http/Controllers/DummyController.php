<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Inyección de dependencias

class DummyController extends Controller {
    
    function any(Request $request) {
        $metodo = $request->method();
        return 'any --> Has llegado con el método: '. $metodo;
    }
    
    function delete() {
        return 'delete';
    }
    
    function get() {
        //return 'get ' . csrf_token();
        return view('dummy.get');
    }
    
    function post() {
        return 'post';
    }
    
    function put() {
        return 'put';
    }
    
}