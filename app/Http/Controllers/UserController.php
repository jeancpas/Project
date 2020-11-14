<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store() {
     error_log(request('username'));
    return redirect('/');
    }
}
