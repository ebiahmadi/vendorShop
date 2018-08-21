<?php

namespace App\Http\Controllers;

use App\Models\Roll;
use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    private $user;
    public function __construct(User $user)
    {
        $this->middleware('');
        $this->user = $user;
    }


    public function login()
    {
        return $this->user->with('roll')->get();
    }
}
