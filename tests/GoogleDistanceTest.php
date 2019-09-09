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

    /** @test */
    public function google_api_key_was_wrong_or_over_query_limit()
    {
        $distance = (new GoogleDistanceApi('google_api_key'))
                                ->setOrigins('79 Đinh Tiên Hoàng, P Đa Kao, Q1, TPHCM')
                                ->setDestinations('265 Nguyễn Đình Chiểu, P5, Q3 ')
                                ->calculate();

        $this->assertEquals(-1, $distance);
    }
    
    /** @test */
    public function origins_address_is_wrong()
    {
        $distance = (new GoogleDistanceApi('google_api_key'))
            ->setOrigins('')
            ->setDestinations('265 Nguyễn Đình Chiểu, P5, Q3')
            ->calculate();

        $this->assertEquals(-1, $distance);
    }

    /** @test */
    public function destinations_address_is_wrong()
    {
        $distance = (new GoogleDistanceApi('google_api_key'))
            ->setOrigins('79 Đinh Tiên Hoàng, P Đa Kao, Q1, TPHCM')
            ->setDestinations('')
            ->calculate();

        $this->assertEquals(-1, $distance);
    }

    /** @test */
    public function origins_address_and_destinations_address_are_same()
    {
        $distance = (new GoogleDistanceApi('google_api_key'))
            ->setOrigins('79 Đinh Tiên Hoàng, P Đa Kao, Q1, TPHCM')
            ->setDestinations('79 Đinh Tiên Hoàng, P Đa Kao, Q1, TPHCM')
            ->calculate();

        $this->assertEquals(-1, $distance);
    }

    /** @test */
    public function origins_address_and_destinations_address_are_an_empty_string()
    {
        $distance = (new GoogleDistanceApi('google_api_key'))
            ->setOrigins('')
            ->setDestinations('')
            ->calculate();

        $this->assertEquals(-1, $distance);
    }
}
