## Install 
`composer require zloadmin/outlet-domain:dev-master`

## Set configuration
In your .env file add strings

`OD_DIGITAL_OCEAN_ACCESS_TOKEN=your_token_here`

`OD_MAIN_DOMAIN=domain.com`

`OD_FRONTEND_SERVER=ipv4`

## Publish config
`php artisan vendor:publish --provider="LaravelOutletDomain\Providers\OutletDomainServiceProvider"`

## Using
```php
<?php
use LaravelOutletDomain\Facades\OutletDomain;

// Check domain exist
OutletDomain::isExistSubDomain('holiday-inn');

// Set sub-domain record
OutletDomain::setSubDomain('holiday-inn');
```


