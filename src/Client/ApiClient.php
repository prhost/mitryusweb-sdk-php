<?php

namespace Mitryusweb\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class ApiClient extends Client
{
    public function request($method, $uri = '', array $options = [])
    {
        try {

            return parent::request($method, $uri, $options);

        } catch (ClientException $e) {
            throw new ApiException(
                $e->getMessage(),
                $e->getCode(),
                $e->getResponse()
            );
        }
    }
}