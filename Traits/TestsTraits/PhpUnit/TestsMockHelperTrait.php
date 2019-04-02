<?php

namespace Apiato\Core\Traits\TestsTraits\PhpUnit;

use App;
use Mockery;

/**
 * Class TestsMockHelperTrait
 *
 * Tests helper for mocking objects and services.
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
trait TestsMockHelperTrait
{

    /**
     * Mocking helper
     *
     * @param $class
     *
     * @return  \Mockery\MockInterface
     */
    public function mock($abstract, ?\Closure $mock = NULL)
    {
        $mock = Mockery::mock($abstract);
        App::instance($class, $mock);

        return $mock;
    }
}
