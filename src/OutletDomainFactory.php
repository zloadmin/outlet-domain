<?php
declare(strict_types=1);
namespace LaravelOutletDomain;


/**
 * Class OutletDomain
 *
 * @package LaravelOutletDomain\OutletDomainFactory
 */

class OutletDomainFactory
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