<?php

namespace Pnlinh\GoogleDistance\Contracts;

interface GoogleDistanceContract
{
    /**
     * Caculate distance from origins to destinations
     *
     * @return int
     */
    public function calculate(): int;
}