<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayoutsController extends Controller
{
    public function Index()
    {
        return view('backend.layouts');
    }
}
