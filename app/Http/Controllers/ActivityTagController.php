<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\ActivityTag;

class ActivityTagController extends BaseController
{
    public function __construct()
    {
        $this->classe = ActivityTag::class;
    }
}
