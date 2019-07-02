<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\City;

class CityController extends BaseController
{
    public function __construct()
    {
        $this->classe = City::class;
    }
}
