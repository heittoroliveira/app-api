<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\EventCategory;

class EventCategoryController extends BaseController
{
    public function __construct()
    {
        $this->classe = EventCategory::class;
    }
}
