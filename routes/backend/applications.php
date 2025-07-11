<?php

use App\Http\Controllers\Backend\ApplicationsController;
use Tabuna\Breadcrumbs\Trail;


$prefix = 'applications';
$routePrefix = 'applications';
if (in_array(Request::segment(2), ['crm'])) {
    // This design ID exists in the list
    $prefix = Request::segment(2).'/applications';
    $routePrefix = Request::segment(2).'.applications';
}


Route::group([
    'prefix' => "{$prefix}",
], function () use($routePrefix) {
    Route::get('app-chat', [ApplicationsController::class, 'ChatIndex'])
        ->name($routePrefix.'.app-chat')
        ->breadcrumbs(function (Trail $trail) use($routePrefix) {
            $trail->parent('admin.'.$routePrefix.'.app')
            ->push(__('Chat'), route('admin.'.$routePrefix.'.app-chat')
        ); 
    });
    Route::get('app-image-generate', [ApplicationsController::class, 'ImageGenerateIndex'])
        ->name($routePrefix.'.app-image-generate')
        ->breadcrumbs(function (Trail $trail) use($routePrefix) {
            $trail->parent('admin.'.$routePrefix.'.app')
            ->push(__('Chat'), route('admin.'.$routePrefix.'.app-image-generate')
        ); 
    });
    Route::post('chat-ai', [ApplicationsController::class, 'chatAI'])->name('send-chat-api');
});
