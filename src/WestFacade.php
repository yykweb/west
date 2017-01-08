<?php
namespace yykweb\west;
use houdunwang\framework\build\Facade;

class WestFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'West';
    }
}