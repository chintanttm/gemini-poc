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
    'prefix' => "{$prefix}"
], function () use($routePrefix) {
    Route::get('app', [ApplicationsController::class, 'App'])
        ->name($routePrefix.'.app')
        ->breadcrumbs(function (Trail $trail) use ($routePrefix) {
            $trail->parent('admin.dashboard')
                ->push(__('Applications'), route('admin.'.$routePrefix.'.app'));
        });

    Route::get('app-calendar', [ApplicationsController::class, 'calendarIndex'])
        ->name($routePrefix.'.app-calendar')
        ->breadcrumbs(function (Trail $trail) use ($routePrefix) {
            $trail->parent('admin.'.$routePrefix.'.app')
                ->push(__('Calendar'), route('admin.'.$routePrefix.'.app-calendar'));
        });

    Route::get('app-calendar-tui', [ApplicationsController::class, 'calendarTuiIndex'])
        ->name($routePrefix.'.app-calendar-tui')
        ->breadcrumbs(function (Trail $trail) use($routePrefix) {
            $trail->parent('admin.'.$routePrefix.'.app')
            ->push(__('Tui Calendar'), route('admin.'.$routePrefix.'.app-calendar-tui')
        ); 
    });

    Route::get('app-email', [ApplicationsController::class, 'EmailIndex'])
        ->name($routePrefix.'.app-email')
        ->breadcrumbs(function (Trail $trail) use($routePrefix) {
            $trail->parent('admin.'.$routePrefix.'.app')
            ->push(__('App Email'), route('admin.'.$routePrefix.'.app-email')
        ); 
    });

    Route::get('app-email-compose', [ApplicationsController::class, 'ComposeEmailIndex'])
        ->name($routePrefix.'.app-email-compose')
        ->breadcrumbs(function (Trail $trail) use($routePrefix) {
            $trail->parent('admin.'.$routePrefix.'.app')
            ->push(__('App Email'), route('admin.'.$routePrefix.'.app-email-compose')
        ); 
    });

    Route::get('app-email-detail', [ApplicationsController::class, 'EmailDetailIndex'])
        ->name($routePrefix.'.app-email-detail')
        ->breadcrumbs(function (Trail $trail) use($routePrefix) {
            $trail->parent('admin.'.$routePrefix.'.app')
            ->push(__('App Email'), route('admin.'.$routePrefix.'.app-email-detail')
        ); 
    });

    Route::get('app-chat', [ApplicationsController::class, 'ChatIndex'])
        ->name($routePrefix.'.app-chat')
        ->breadcrumbs(function (Trail $trail) use($routePrefix) {
            $trail->parent('admin.'.$routePrefix.'.app')
            ->push(__('Chat'), route('admin.'.$routePrefix.'.app-chat')
        ); 
    });

    Route::get('app-campaigns', [ApplicationsController::class, 'CampaignsIndex'])
        ->name($routePrefix.'.app-campaigns')
        ->breadcrumbs(function (Trail $trail) use($routePrefix) {
            $trail->parent('admin.'.$routePrefix.'.app')
            ->push(__('My Campaigns'), route('admin.'.$routePrefix.'.app-campaigns')
        ); 
    });

    Route::get('app-social', [ApplicationsController::class, 'SocialIndex'])
        ->name($routePrefix.'.app-social')
        ->breadcrumbs(function (Trail $trail) use($routePrefix) {
            $trail->parent('admin.'.$routePrefix.'.app')
            ->push(__('Social App'), route('admin.'.$routePrefix.'.app-social')
        ); 
    });

    Route::get('app-file-manager', [ApplicationsController::class, 'FileManagerIndex'])
        ->name($routePrefix.'.app-file-manager')
        ->breadcrumbs(function (Trail $trail) use($routePrefix) {
            $trail->parent('admin.'.$routePrefix.'.app')
            ->push(__('File Manager'), route('admin.'.$routePrefix.'.app-file-manager')
        ); 
    });

    Route::get('app-todo', [ApplicationsController::class, 'TodolistIndex'])
        ->name($routePrefix.'.app-todo')
        ->breadcrumbs(function (Trail $trail) use($routePrefix) {
            $trail->parent('admin.'.$routePrefix.'.app')
            ->push(__('Todo list'), route('admin.'.$routePrefix.'.app-todo')
        ); 
    });

    Route::get('app-contacts', [ApplicationsController::class, 'ContactsIndex'])
        ->name($routePrefix.'.app-contacts')
        ->breadcrumbs(function (Trail $trail) use($routePrefix) {
            $trail->parent('admin.'.$routePrefix.'.app')
            ->push(__('My Contacts'), route('admin.'.$routePrefix.'.app-contacts')
        ); 
    });

    Route::get('app-tasks', [ApplicationsController::class, 'TasksIndex'])
        ->name($routePrefix.'.app-tasks')
        ->breadcrumbs(function (Trail $trail) use($routePrefix) {
            $trail->parent('admin.'.$routePrefix.'.app')
            ->push(__('My Tasks'), route('admin.'.$routePrefix.'.app-tasks')
        ); 
    });

    Route::get('app-project', [ApplicationsController::class, 'ProjectIndex'])
        ->name($routePrefix.'.app-project')
        ->breadcrumbs(function (Trail $trail) use($routePrefix) {
            $trail->parent('admin.'.$routePrefix.'.app')
            ->push(__('Project'), route('admin.'.$routePrefix.'.app-project')
        ); 
    });

    Route::get('app-project-detail', [ApplicationsController::class, 'ProjectDetailIndex'])
        ->name($routePrefix.'.app-project-detail')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.'.$routePrefix.'.app-project')
            ->push(__('View Project'), route('admin.'.$routePrefix.'.app-project-detail')
        ); 
    });

    Route::get('app-jkanban', [ApplicationsController::class, 'JkanbanIndex'])
        ->name($routePrefix.'.app-jkanban')
        ->breadcrumbs(function (Trail $trail) use($routePrefix) {
            $trail->parent('admin.'.$routePrefix.'.app')
            ->push(__('Kanban Board'), route('admin.'.$routePrefix.'.app-jkanban')
        ); 
    });

    Route::get('app-blog', [ApplicationsController::class, 'BlogIndex'])
        ->name($routePrefix.'.app-blog')
        ->breadcrumbs(function (Trail $trail) use($routePrefix) {
            $trail->parent('admin.'.$routePrefix.'.app')
            ->push(__('Blog'), route('admin.'.$routePrefix.'.app-blog')
        ); 
    });

    Route::get('app-blog-detail', [ApplicationsController::class, 'BlogDetailIndex'])
        ->name($routePrefix.'.app-blog-detail')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.'.$routePrefix.'.app-blog')
            ->push(__('View Blog'), route('admin.'.$routePrefix.'.app-blog-detail')
        ); 
    });

    Route::get('app-blog-post', [ApplicationsController::class, 'BlogPostIndex'])
        ->name($routePrefix.'.app-blog-post')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.'.$routePrefix.'.app-blog')
            ->push(__('Create Post'), route('admin.'.$routePrefix.'.app-blog-post')
        ); 
    });

    Route::post('chat-ai', [ApplicationsController::class, 'chatAI'])->name('send-chat-api');
});
