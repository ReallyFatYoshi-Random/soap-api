<?php

use Faker\Factory;
use Faker\Generator;

/**
 * Returns the faker generator instance.
 * 
 * @return Generator
 */
function fake(): Generator
{
    return Factory::create();
}
