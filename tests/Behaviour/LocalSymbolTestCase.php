<?php
/**
 * This file is part of Symbol package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Serafim\Symbol\Tests\Behaviour;

use Serafim\Symbol\Symbol;

/**
 * Class LocalSymbolTestCase
 */
class LocalSymbolTestCase extends BehaviourTestCase
{
    /**
     * @return void
     * @throws \PHPUnit\Framework\ExpectationFailedException
     */
    public function testIsUniqueWithoutName(): void
    {
        $a = Symbol::create();
        $b = Symbol::create();

        $this->assertNotSame($a, $b);
    }

    /**
     * @return void
     * @throws \PHPUnit\Framework\ExpectationFailedException
     */
    public function testIsUniqueWithSameNames(): void
    {
        $a = Symbol::create('a');
        $b = Symbol::create('a');

        $this->assertNotSame($a, $b);
    }
}
