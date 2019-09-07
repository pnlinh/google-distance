# Google Distance
[![StyleCI](https://github.styleci.io/repos/155354599/shield?branch=master)](https://github.styleci.io/repos/155354599)

## Requirements

- PHP >= 7.1.3
- GuzzleHttp >= 6.3

## Installation

Require this package with composer.

```bash
composer require pnlinh/google-distance
```

## Usage

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use Pnlinh\GoogleDistance\Factory\GoogleDistance;

$distance = GoogleDistance::make('YOUR_GOOGLE_API_KEY')
                            ->setOrigins('From Address')
                            ->setDestinations('To Address')
                            ->calculate();


echo "Distance value is: ". $distance . PHP_EOL;
```

## Test

```bash
composer test
```

## Credits

- [Pham Ngoc Linh](https://github.com/pnlinh)

For more info, please visit https://developers.google.com/maps/documentation/distance-matrix/
