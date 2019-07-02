<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Address;

class AddressController extends BaseController
{
    public function __construct()
    {
        $this->classe = Address::class;
    }
}
