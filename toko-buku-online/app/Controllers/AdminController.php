<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        //
    }
    public function pelanggan(){
        return view('admin/pelanggan');
    }
}
