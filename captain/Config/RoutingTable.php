<?php

namespace Config;

class RoutingTable
{
    public static function getRoutingTable() : array
    {
        return array(
            "" => array("\Application\Test", "index"),
            "test/echotest" => array("\Application\Test", "echoTest")
        );
    }
}
