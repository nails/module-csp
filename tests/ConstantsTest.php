<?php

namespace Tests\Csp;

use Nails\Csp\Constants;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Nails\Csp\Constants
 */
class ConstantsTest extends TestCase
{
    public function test_module_slug_is_correct(): void
    {
        self::assertSame('nails/module-csp', Constants::MODULE_SLUG);
    }
}
