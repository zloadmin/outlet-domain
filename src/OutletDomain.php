<?php
declare(strict_types=1);

namespace LaravelOutletDomain;

use DigitalOceanV2\Api\Domain;
use DigitalOceanV2\Client;

/**
 * Class OutletDomain
 *
 * @package LaravelOutletDomain\OutletDomain
 */

class OutletDomain
{

    const CONFIG_PATH = __DIR__ . '/../config/outlet-domain.php';

    private $config;

    private $client;

    /**
     * OutletDomain constructor.
     */
    public function __construct()
    {
        $this->config = is_array(config('outlet-domain')) ? config('outlet-domain') : require self::CONFIG_PATH;
        $this->client = new Client();
        $this->client->authenticate($this->getAccessToken());
    }
    /**
     * @return array
     */
    public function getConfig(): array
    {
        return $this->config;
    }

    private function getAccessToken() : string
    {
        return $this->config['digital_ocean_access_token'];
    }

    public function getAllDomains() : array
    {
        return $this->domain()->getAll();
    }

    /**
     * @return Domain
     */
    private function domain() : Domain
    {
        return $this->client->domain();
    }
}