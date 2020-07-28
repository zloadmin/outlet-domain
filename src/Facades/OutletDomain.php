<?php
declare(strict_types=1);
namespace LaravelOutletDomain\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class OutletDomain
 * @package LaravelOutletDomain\Facades
 */
class OutletDomain extends Facade
{
    protected static function getFacadeAccessor() {
        return 'outlet-domain';
    }
}