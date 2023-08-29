<?php

use App\Enums\UserRoleEnum;

if (!function_exists('is_admin')) {
    function is_admin()
    {
        if (auth('admin')->user() && auth('admin')->user()->role === UserRoleEnum::Admin){
            return true;
        }
        return false;
    }
}
