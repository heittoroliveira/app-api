<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\ActivityType;

class ActivityTypeController extends BaseController
{
    public function __construct()
    {
        $this->classe = ActivityType::class;
    }
}
