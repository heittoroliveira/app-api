<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Event;

class EventController extends BaseController
{
    public function __construct()
    {
        $this->classe = Event::class;
    }
}
