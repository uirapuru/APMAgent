<?php

namespace APMAgent;

use APMAgent\Factory\EventFactory;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class Agent
{
    /** @var Store  */
    protected $store;

    /** @var HttpClientInterface */
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
        $this->store = new Store();
    }

    public function commit()
    {
        $body = $this->store->jsonSerialize();

        $this->client->request("POST", "/intake/v2/events", [
            "json" => json_decode($body, JSON_OBJECT_AS_ARRAY)
        ]);
    }

    public function push($events)
    {
        $this->store->register($events);
    }

}