<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SettingController;

use Tabuna\Breadcrumbs\Trail;

Route::middleware(['load.menu'])->group(function () {
    
    // All route names are prefixed with 'admin.'.
    Route::redirect('/', '/admin/dashboard', 301);
    Route::get('dashboard', [DashboardController::class, 'index'])
        ->name('dashboard')
        ->breadcrumbs(function (Trail $trail) {
            $trail->push(__('Home'), route('admin.dashboard'));
    });

    Route::patch('setting', [SettingController::class, 'update'])->name('setting.update');
require __DIR__ . '/applications.php';

});

// require __DIR__ . '/crm.php';