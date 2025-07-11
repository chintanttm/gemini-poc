<?php

namespace App\Helpers;

use App\Models\Settings;
use Auth;
use Request;

class BodyClassHelper
{
    public static function pageBasedDynamicClass()
    {
        $currentUrl = collect(Request::segments())->last();
        if($currentUrl != 'app-email' && $currentUrl != 'app-email-compose' && 
        $currentUrl != 'app-email-detail' && $currentUrl != 'app-chat' && $currentUrl != 'app-image-generate' &&
        $currentUrl != 'app-social' && $currentUrl != 'app-file-manager' &&
        $currentUrl != 'app-tasks' && $currentUrl != 'app-project' && 
        $currentUrl != 'app-project-detail'){
            $bodyClasses = 'px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-3';
            $hideContainerClass = false; 
            $showBreadcrumbs = true;
            $showFooter = true;
        }else{
            $hideContainerClass = true;
            $showBreadcrumbs = false;
            $showFooter = false;
            if($currentUrl == 'app-email' || $currentUrl == 'app-email-compose' || $currentUrl == 'app-email-detail'){
                $bodyClasses = 'inbox';
            }else if($currentUrl == 'app-chat'){
                $bodyClasses = 'chat-app';
            }else if($currentUrl == 'app-image-generate'){
                $bodyClasses = 'chat-app';
            }else if($currentUrl == 'app-social'){
                $bodyClasses = 'body-layout-1 app-social';
            }else if($currentUrl == 'app-file-manager'){
                $bodyClasses = 'body-layout-1 file-manager';
            }else if($currentUrl == 'app-tasks'){
                $bodyClasses = 'body-layout-1 my-task';
            }else if($currentUrl == 'app-project' || $currentUrl == 'app-project-detail'){
                $bodyClasses = 'body-layout-1 project-list';
            }
        }
        
        return [
            'bodyClass' => $bodyClasses,
            'hideContainerClass' => $hideContainerClass,
            'showBreadcrumbs' => $showBreadcrumbs,
            'showFooter' => $showFooter
        ];
    }
}
