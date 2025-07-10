<?php

use App\Http\Controllers\Backend\ApplicationsController;
use Tabuna\Breadcrumbs\Trail;
use App\Http\Controllers\Backend\CrmController;

Route::middleware(['load.menu'])->group(function () {

    Route::group([
        'prefix' => 'crm',
    ], function () {
        Route::get('crm-management', [CrmController::class, 'index'])
            ->name('crm.crm-management')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                ->push(__('Applications'), route('admin.crm.crm-management'));
            });
    });

});