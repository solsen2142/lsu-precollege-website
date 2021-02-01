<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class RedirectController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Example Title'
        ];

        return view('myview', $data);  // resources/views/myview.blade.php
    }
}
