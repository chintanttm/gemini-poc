<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApplicationsController extends Controller
{

    public function ChatIndex()
    {
        return view('backend.applications.app-chat');
    }

    function ImageGenerateIndex() {
        return view('backend.applications.image-generate');    
    }
}
