<?php

/*
 * This file is part of the trendsoft/laravel-capital.
 * (c) jabber <2898117012@qq.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Tests\Unit;

use Capital\Money;
use Tests\TestCase;

class MoneyServiceProviderTest extends TestCase
{
    public function testServiceProvider()
    {
        $this->assertIsInjectable(Money::class);
    }
}
