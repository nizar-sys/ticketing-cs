<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;

class UnauthorizedIfUserIsNotSuperAdmin
{
    public static function check()
    {
        if(!Auth::user()->hasRole('administrator')) {
            abort(401);
        }
    }

    public static function forRequest()
    {
        return Auth::user()->hasRole('administrator');
    }
}
