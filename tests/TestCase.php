<?php
/**
 * This file is part of Symbol package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Serafim\Symbol\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;
use Serafim\Symbol\TypeError;

/**
 * Class TestCase
 */
abstract class TestCase extends BaseTestCase
{
    /**
     * @param string $method
     * @param string $shouldBe
     * @return void
     */
    protected function expectInvalidArgumentError(string $method, string $shouldBe): void
    {
        $this->expectExceptionCode(TypeError::INVALID_ARGUMENT_CODE);

        $this->expectExceptionMessageRegExp(\vsprintf(
            '/^Argument 1 passed to %s\(\) must be of the type %s, \w+ given/',
            [
                \preg_quote($method, '/'),
                \preg_quote($shouldBe, '/'),
            ]
        ));
    }
}
