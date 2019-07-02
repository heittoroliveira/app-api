<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\EventPrice;

class EventPriceController extends BaseController
{
    public function __construct()
    {
        $this->classe = EventPrice::class;
    }
}
