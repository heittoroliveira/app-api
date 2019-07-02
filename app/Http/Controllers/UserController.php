<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;

class UserController extends BaseController
{
    public function __construct()
    {
        $this->classe = User::class;
    }
}
