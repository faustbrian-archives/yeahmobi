<?php

/*
 * This file is part of YeahMobi PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\YeahMobi;

use BrianFaust\Unified\AbstractServiceProvider;

class ServiceProvider extends AbstractServiceProvider
{
    public function getIdentifier()
    {
        return 'faustbrian.yeahmobi';
    }
}
