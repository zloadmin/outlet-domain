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

    const CONFIG_PATH = __DIR__ . '/../../config/outlet-domain.php';

    private $config;

    /**
     * OutletDomain constructor.
     */
    public function __construct()
    {
        $this->config = is_array(config('outlet-domain')) ? config('outlet-domain') : file_get_contents(self::CONFIG_PATH);
    }

    public function test(): string
    {
        return 'test';
    }


    /**
     * @return array
     */
    private function getConfig(): array
    {
        return $this->config;
    }


}