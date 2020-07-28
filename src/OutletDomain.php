<?php
declare(strict_types=1);
namespace LaravelOutletDomain;


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