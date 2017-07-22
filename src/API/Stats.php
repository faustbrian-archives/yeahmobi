<?php

/*
 * This file is part of YeahMobi PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\YeahMobi\API;

use BrianFaust\Http\HttpResponse;

class Stats extends AbstractAPI
{
    public function getStatsReport(array $parameters = []): HttpResponse
    {
        return $this->client->get('stats/stats.json', $parameters);
    }

    public function getConversionReport(array $parameters = []): HttpResponse
    {
        return $this->client->get('stats/lead_report.json', $parameters);
    }
}
