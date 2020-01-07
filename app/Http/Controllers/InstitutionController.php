<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institution;

class InstitutionController extends BaseController
{
    public function __construct()
    {
        $this->classe = Institution::class;
    }
}
