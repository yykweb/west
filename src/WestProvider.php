<?php
namespace yykweb\west;
use houdunwang\framework\build\Provider;

class WestProvider extends Provider
{
    //延迟加载
    public $defer = true;

    public function boot() {
    }

    public function register() {
        $this->app->single( 'West', function (  ) {
            return new West();
        } );
    }
}