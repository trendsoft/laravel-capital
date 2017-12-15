<?php

/*
 * This file is part of the trendsoft/laravel-capital.
 * (c) jabber <2898117012@qq.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Tests\Unit;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use LaravelCapital\Money;
use Tests\TestCase;

class MoneyFacadeTest extends TestCase
{
    use FacadeTrait;

    protected function getFacadeAccessor()
    {
        return 'Capital\Money';
    }

    protected function getFacadeClass()
    {
        return Money::class;
    }

    protected function getFacadeRoot()
    {
        return \Capital\Money::class;
    }
}
