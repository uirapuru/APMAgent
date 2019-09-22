<?php

namespace APMAgent;

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

        die(var_dump($body));

        $this->client->request("POST", "/intake/v2/events", [
            "body" => $body
        ]);

        $this->store->reset();
    }

    public function push($events)
    {
        $this->store->register($events);
    }

}