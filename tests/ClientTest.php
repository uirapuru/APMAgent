<?php

namespace Test;

use APMAgent\Agent;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\HttpClient;

class ClientTest extends TestCase
{
    public function test() {
        $agent = new Agent(HttpClient::create([
            "base_uri" => 'https://41612342f6934b8b8d649c9051dcb5a7.apm.eu-central-1.aws.cloud.es.io:443',
            "headers" => [
                "Accept" =>         'application/json',
                "Content-Type" =>   'application/x-ndjson',
                "User-Agent" =>     'elastica/apm-php',
                "Authorization" =>  'Bearer nrwUR4qlMkYEZlMU4Y',
                "http_version" => '1.0',
                "timeout" => 30,
            ]
        ]));

        $agent->push();
    }
}