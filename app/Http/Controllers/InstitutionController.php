<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Institution;

class InstitutionController extends BaseController
{
    public function __construct()
    {
        $this->classe = Institution::class;
    }
}
