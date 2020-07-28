## Install 
`composer require zloadmin/outlet-domain`

## Set configuration
In your .env file add string
`DIGITAL_OCEAN_ACCESS_TOKEN=your_token_here`

## Publish config
`php artisan vendor:publish --provider="LaravelOutletDomain\Providers\OutletDomainServiceProvider"`


