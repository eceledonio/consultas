<?php

namespace App\Http\Controllers;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Route;

class RoutesController
{


    /**
     * Show Pretty Routes
     * @return Application|Factory|View
     */
    public function show()
    {
        abort_if(! config('boilerplate.routes.debug_only') == true, 404);

        $middlewareClosure = function ($middleware) {
            return $middleware instanceof Closure ? 'Closure' : $middleware;
        };

        $routes = collect(Route::getRoutes());

        foreach (config('boilerplate.routes.hide_matching') as $regex) {
            $routes = $routes->filter(function ($value, $key) use ($regex) {
                return ! preg_match($regex, $value->uri());
            });
        }

        return view('routes', [
            'routes' => $routes,
            'middlewareClosure' => $middlewareClosure,
        ]);
    }
}
