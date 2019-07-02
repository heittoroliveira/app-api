<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\InstitutionType;

class InstitutionTypeController extends BaseController
{
    public function __construct()
    {
        $this->classe = InstitutionType::class;
    }
}
