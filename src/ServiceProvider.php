<?php

namespace Webfoo\PositionFieldtype;

use Statamic\Providers\AddonServiceProvider;
use Webfoo\PositionFieldtype\Fieldtype\Position;

class ServiceProvider extends AddonServiceProvider
{
    protected $scripts = [
        __DIR__ . '/../dist/js/position-fieldtype.js'
    ];

    protected $fieldtypes = [
        Position::class,
    ];
}
