<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class adminController extends Controller
{
    public function __construct()
    {
    }

    public function login(Request $request)
    {
        return 'hello';
    }
}
