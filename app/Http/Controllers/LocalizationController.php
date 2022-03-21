<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function setLocale($locale)
    {
        if (!array_key_exists($locale, Config::get('language'))) {
            $locale = Config::get('app.fallback_locale');
        }

        Session::put('app_locale', $locale);

        return redirect()->back();
    }
}
