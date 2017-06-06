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

use BrianFaust\Unified\AbstractHttpClient;

class HttpClient extends AbstractHttpClient
{
    /** @var array */
    protected $options = [
        'base_uri' => 'https://yeahmobi.hasoffers.com/',
        'headers'  => [
           'User-Agent' => 'BrianFaust\YeahMobi',
        ],
    ];

    /** @var array */
    protected $requestModifiers = [Modifiers\AuthModifier::class];

    /**
     * @param string $uri
     * @param string $path
     *
     * @return string
     */
    protected function buildRequestUri(string $uri, string $path)
    {
        return $uri;
    }
}
