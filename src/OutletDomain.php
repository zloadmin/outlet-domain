<?php
declare(strict_types=1);
namespace LaravelOutletDomain;


/**
 * Class OutletDomain
 *
 * @package LaravelOutletDomain\OutletDomain
 */

class OutletDomain
{
    public function test() : string
    {
        return 'test';
    }
    public function config() : array
    {
        return config('outlet-domain');
    }
}