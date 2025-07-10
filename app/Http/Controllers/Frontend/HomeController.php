<?php

namespace App\Http\Controllers\Frontend;

/**
 * Class HomeController.
 */
class HomeController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        if (auth()->check()) {
            if (auth()->user()->can('view backend')) {
                return redirect('admin/dashboard');
            }
        }
        return redirect('/login');
    }
}
