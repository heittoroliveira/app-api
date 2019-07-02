<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Country;

class CountryController extends BaseController
{
    public function __construct()
    {
        $this->classe = Country::class;
    }
}
