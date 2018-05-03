<?php

use \Core\Route;

try
{
    Route::add('index', "Backstage", "index");
    Route::add('push', "Backstage", "push");
}
catch(\Exception $e)
{
    if ( defined('DEBUG') )
    {
        if ( DEBUG )
        {
            echo $e->getMessage();
            exit;
        }
    }
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
}

