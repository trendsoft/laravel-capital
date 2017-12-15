<?php

/*
 * This file is part of the trendsoft/laravel-capital.
 * (c) jabber <2898117012@qq.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace LaravelCapital;

use Capital\Money as CapitalMoney;
use Illuminate\Support\Facades\Facade;

class Money extends Facade
{
    /**
     * Return the facade accessor.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return CapitalMoney::class;
    }
}
