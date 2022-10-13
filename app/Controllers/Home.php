<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\Auth;

class Home extends BaseController
{
    public function index()
    {
        $auth = new Auth();
        return $auth->get();
    }
}
