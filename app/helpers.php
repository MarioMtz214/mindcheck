<?php

use Illuminate\Support\Facades\Cookie;

if (!function_exists('idcookies')) {
    function idcookies()
    {
        return Cookie::get('user_id'); // Aquí asumo que estás almacenando el ID de usuario en una cookie llamada 'user_id'
    }
}