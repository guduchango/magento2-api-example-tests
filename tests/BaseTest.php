<?php

namespace guduchango\ApiMagento2ExampleTests\tests;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

abstract class BaseTest extends TestCase
{

    const API_URL = 'http://localhost/magento2/rest/V1/';
    const USER_TOKEN = 'a6wgmkivuusc9g7wnxurvqqlo5nvjw9x';
    const AUTORIZATION = [
        'Authorization' => 'Bearer ' . self::USER_TOKEN,
        'content-type' => 'application/json',
    ];

    protected $client;

    public function setUp()
    {
        $this->client = new Client();
    }

    protected function getUrl($partialUrl)
    {
        return self::API_URL . $partialUrl;
    }


    protected function getRest($url): Response
    {
        return $this->client->request('GET', $this->getUrl($url), ['headers' => self::AUTORIZATION]);
    }

    protected function postRest(string $url,array $body): Response
    {
        return $this->client->request('POST', $this->getUrl($url),
            [
                'headers' => self::AUTORIZATION,
                'body' => json_encode($body)
            ]
        );
    }

}