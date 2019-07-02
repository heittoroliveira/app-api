<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Contact;

class ContactController extends BaseController
{
    public function __construct()
    {
        $this->classe = Contact::class;
    }
}
