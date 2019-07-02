<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Activity;

class ActivityController extends BaseController
{
    public function __construct()
    {
        $this->classe = Activity::class;
    }
}
