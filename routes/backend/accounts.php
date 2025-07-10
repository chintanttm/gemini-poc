<?php

use Tabuna\Breadcrumbs\Trail;
use App\Http\Controllers\backend\UniqueController;
use App\Http\Controllers\Backend\AccountController;

$applications = [
    'crm' => 'crm-management',
    'crypto' => 'cryptocurrency',
    'ecommerce'=>'ecommerce' ,

    'event'=>'event-management',
    'fitness'=>'fitness-analytics',
    'hospital'=>'hospital-management',

    'hr'=>'hr-project',
    'inventory'=>'inventory-management',
    'job'=>'job-portal',

    'music'=>'music-streaming',
    'nft'=>'nft-dashboard',
    'real-estate'=>'real-estate',

    'restaurant'=>'restaurant-cafe',
    'server'=>'server-analysis',
    'school'=>'school-univercity'
    // Add other applications here
];
foreach ($applications as $key => $appName) {


    Route::get('account-settings', [AccountController::class, 'SettingsIndex'])
    ->name('account-settings')
    ->breadcrumbs(function (Trail $trail) use ($key,$appName){
        $trail->parent("admin.{$key}.{$appName}")
        ->push(
            __('Settings'),
            route("admin.{$key}.account.account-settings")
        );
    });

    Route::get('account-invoices', [AccountController::class, 'InvoicesIndex'])
    ->name('account-invoices')
    ->breadcrumbs(function (Trail $trail) use ($key,$appName){
        $trail->parent("admin.{$key}.{$appName}")
        ->push(
            __('Invoices'),
                route("admin.{$key}.account.account-invoices")
            );
        });

        Route::get('account-create-invoices', [AccountController::class, 'CreateInvoicesIndex'])
        ->name('account-create-invoices')
        ->breadcrumbs(function (Trail $trail) use ($key,$appName){
            $trail->parent("admin.{$key}.{$appName}")
            ->push(
                __('Create Invoices'),
                route("admin.{$key}.account.account-create-invoices")
            );
        });

        Route::get('account-billing', [AccountController::class, 'BillingIndex'])
        ->name('account-billing')
        ->breadcrumbs(function (Trail $trail) use ($key,$appName){
            $trail->parent("admin.{$key}.{$appName}")
            ->push(
                __('Billing'),
                route("admin.{$key}.account.account-billing")
            );
        });

    }
