<?php
declare(strict_types=1);

namespace LaravelOutletDomain;

use DigitalOceanV2\Api\Domain;
use DigitalOceanV2\Client;
use DigitalOceanV2\Api\DomainRecord;
use DigitalOceanV2\Exception\ExceptionInterface;

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
    private function getConfig(): array
    {
        return $this->config;
    }

    private function getAccessToken(): string
    {
        return $this->config['digital_ocean_access_token'];
    }

    private function getMainDomain(): string
    {
        return $this->config['main_domain'];
    }

    private function getCurrentServer(): string
    {
        return $this->config['current_server'];
    }
    private function domainRecord(): DomainRecord
    {
        return $this->client->domainRecord();
    }

    private function getAllRecordsByDomain(string $domain)
    {
        return $this->domainRecord()->getAll($domain);
    }
    /**
     * Check if sub-domain record exist in DigitalOcean
     * @param string $subDomain
     * @return bool
     */
    public function isExistSubDomain(string $subDomain): bool
    {
        $records = $this->getAllRecordsByDomain($this->getMainDomain());
        foreach ($records as $record) {
            if ($record->name == $subDomain) return true;
        }
        return false;
    }

    /**
     * Add sub-domain record to current server
     * @param string $subDomain
     * @throws ExceptionInterface
     * @return DomainRecord
     */
    public function setSubDomain(string $subDomain)
    {
        return $this->domainRecord()->create($this->getMainDomain(), 'A', $subDomain, $this->getCurrentServer());
    }
}