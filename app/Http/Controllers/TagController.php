<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Tag;

class TagController extends BaseController
{
    public function __construct()
    {
        $this->classe = Tag::class;
    }
}
