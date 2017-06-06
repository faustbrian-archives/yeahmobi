<?php

/*
 * This file is part of YeahMobi PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\YeahMobi\Api;

use BrianFaust\Unified\AbstractApi;

class Stats extends AbstractApi
{
    public function getStatsReport($parameters = [])
    {
        return $this->get('stats/stats', $parameters);
    }

    public function getConversionReport($parameters = [])
    {
        return $this->get('stats/lead_report', $parameters);
    }
}
