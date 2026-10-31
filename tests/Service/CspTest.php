<?php

namespace Tests\Csp\Service;

use Nails\Csp\Factory;
use Nails\Csp\Service\Csp;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Nails\Csp\Service\Csp
 */
class CspTest extends TestCase
{
    public function test_nothing_is_loaded_by_default(): void
    {
        self::assertNull((new Csp())->get());
    }

    public function test_load_and_unload(): void
    {
        $service = new Csp();
        $policy  = new Factory\Csp(defaultSrc: ['self']);

        self::assertSame($policy, $service->load($policy)->get());
        self::assertNull($service->unload()->get());
    }
}
