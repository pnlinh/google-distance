# Google Distance
Caculate Google Distance Matrix API

## Requirements

- PHP >= 7.1.3

## Installation

Require this package with composer.

```bash
composer require pnlinh/google-distance:dev-master
```

## Usage

```php
require_once __DIR__ . '/vendor/autoload.php';

use Pnlinh\GoogleDistance\Factory\GoogleDistance;

$distance = GoogleDistance::make('YOUR_GOOGLE_API_KEY')
                            ->setOrigins('From Address')
                            ->setDestinations('To Address')
                            ->calculate();


echo "Distance value is: ". $distance . PHP_EOL;
```

## Credits

- [Pham Ngoc Linh](https://github.com/pnlinh)

For more info, please visit https://developers.google.com/maps/documentation/distance-matrix/
