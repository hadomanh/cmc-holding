<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Session::has('app_locale') && array_key_exists(Session::get('app_locale'), Config::get('language'))) {
            App::setLocale(Session::get('app_locale'));
        }
        else {
            App::setLocale(Config::get('app.fallback_locale'));
        }
        return $next($request);
    }
}
