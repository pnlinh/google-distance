<?php

namespace Pnlinh\tests;

use PHPUnit\Framework\TestCase;
use Pnlinh\GoogleDistance\Factory\GoogleDistance;
use Pnlinh\GoogleDistance\GoogleDistanceApi;

class GoogleDistanceTest extends TestCase
{
    /** @test */
    public function it_can_created()
    {
        $googleDistanceApi = new GoogleDistanceApi('foo');

        $this->assertNotNull($googleDistanceApi);
    }

    /** @test */
    public function can_create_from_google_distance_factory_class()
    {
        $googleDistanceApi = GoogleDistance::make('foo');

        $this->assertNotNull($googleDistanceApi);
        $this->assertInstanceOf(GoogleDistanceApi::class, $googleDistanceApi);
    }
}
