<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Schedule;

class ScheduleController extends BaseController
{
    public function __construct()
    {
        $this->classe = Schedule::class;
    }
}
