<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\State;

class StateController extends BaseController
{
    public function __construct()
    {
        $this->classe = State::class;
    }
}
