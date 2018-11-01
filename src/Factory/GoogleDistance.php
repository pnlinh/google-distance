<?php

namespace Pnlinh\GoogleDistance\Factory;

use Pnlinh\GoogleDistance\Contracts\GoogleDistanceContract;
use Pnlinh\GoogleDistance\DistanceApi;

class GoogleDistance
{
    /**
     * Make instance.
     *
     * @param $apiKey
     *
     * @return \Pnlinh\GoogleDistance\Contracts\GoogleDistanceContract
     */
    public static function make($apiKey): GoogleDistanceContract
    {
        return new DistanceApi($apiKey);
    }
}
