<?php

namespace Mitryusweb\Api;

use Mitryusweb\Client\ApiClient;
use Mitryusweb\Client\Response;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Psr\Http\Message\ResponseInterface;

class Mitryusweb
{
    /**
     * Token for HTTP Bearer authentication
     * @var string
     */
    public static $token = '';

    /**
     * Api uri
     * @var string
     */
    public static $uri = 'https://wss.mitryus.com.br:8087/wsintegracao/api/ecommerce/integracao/';

    /**
     * @var ApiClient
     */
    public static $apiClient;

    /*
     *  initalize  ApiClient
     */
    public static function init(string $token = null, string $uri = null)
    {
        if (self::$apiClient === null) {

            $stack = HandlerStack::create();

            $stack->push(Middleware::mapResponse(function (ResponseInterface $response) {
                return new Response(
                    $response->getStatusCode(),
                    $response->getHeaders(),
                    $response->getBody(),
                    $response->getProtocolVersion(),
                    $response->getReasonPhrase());
            }));

            self::$apiClient = new ApiClient([
                'base_uri' => ($uri ? $uri : self::$uri),
                'handler'  => $stack,
                'headers'  => [
                    'Content-Type'  => 'application/json',
                    'Authorization' => 'Bearer ' . ($token ? $token : self::$token),
                ]
            ]);
        }
    }
}