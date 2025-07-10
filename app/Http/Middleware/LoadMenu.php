<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpFoundation\Response;
class LoadMenu
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $menu = $this->loadMenuBasedOnRoute();

        // Store the loaded menu in the config for later use
        config(['menu_json' => $menu]);

        return $next($request);
    }

    /**
     * Load the appropriate menu based on the request route.
     *
     * @return array
     */
    private function loadMenuBasedOnRoute()
    {
        $baseDir = public_path() . '/json/';

        $routes = [
            'admin/crm/*' => 'crm-menu.json'
        ];

        foreach ($routes as $pattern => $file) {
            if (Request::is($pattern)) {
                return json_decode(file_get_contents($baseDir . $file), true);
            }
        }

        // Default menu if no specific route matches
        return json_decode(file_get_contents($baseDir . 'menu.json'), true);
    }
}
