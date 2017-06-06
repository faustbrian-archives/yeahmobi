<?php

/*
 * This file is part of YeahMobi PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\YeahMobi\Modifiers;

use BrianFaust\Modifiers\AbstractModifier;

class AuthModifier extends AbstractModifier
{
    private $uri = 'http://yeahmobi.hasoffers.com/%s.json';
    // private $uri = 'http://aff.furthermobi.com/%s.json';

    public function apply()
    {
        $client = $this->httpClient;

        $client->setOption('base_uri', sprintf($this->uri, $this->arguments['path']));
        $client->addQuery('api_key', $client->getConfig('apiKey'));

        return $client;
    }
}
