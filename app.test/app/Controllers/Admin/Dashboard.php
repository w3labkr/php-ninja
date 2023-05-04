<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Interfaces\ControllerInterface;

class Dashboard extends Controller implements ControllerInterface
{
    public function get()
    {
        echo $this->view('pages.admin.dashboard');
    }

    public function post()
    {
    }

    public function patch()
    {
    }

    public function put()
    {
    }

    public function delete()
    {
    }

    public function options()
    {
    }
}