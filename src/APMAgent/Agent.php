<?php

namespace APMAgent;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class Agent
{
    protected $eventStore;

    /** @var HttpClientInterface */
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function push()
    {
        $body = <<< JSON
'{"metadata": {"process": {"pid": 1234}, "system": {"container": {"id": "container-id"}, "kubernetes": {"namespace": "namespace1", "pod": {"uid": "pod-uid", "name": "pod-name"}, "node": {"name": "node-name"}}}, "service": {"name": "1234_service-12a3", "language": {"name": "ecmascript"}, "agent": {"version": "3.14.0", "name": "elastic-node"}, "framework": {"name": "emac"}}}}
{"error": {"id": "abcdef0123456789", "timestamp": 1533827045999000, "log": {"level": "custom log level","message": "Cannot read property \'baz\' of undefined"}}}
{"span": {"id": "0123456a89012345", "trace_id": "0123456789abcdef0123456789abcdef", "parent_id": "ab23456a89012345", "transaction_id": "ab23456a89012345", "parent": 1, "name": "GET /api/types", "type": "request.external", "action": "get", "start": 1.845, "duration": 3.5642981, "stacktrace": [], "context": {}}}
{"transaction": {"trace_id": "01234567890123456789abcdefabcdef", "id": "abcdef1478523690", "type": "request", "duration": 32.592981, "timestamp": 1535655207154000, "result": "200", "context": null, "spans": null, "sampled": null, "span_count": {"started": 0}}}
{"metricset": {"samples": {"go.memstats.heap.sys.bytes": {"value": 61235}}, "timestamp": 1496170422281000}}'
JSON;

        $this->client->request("POST", "/intake/v2/events", [
            "json" => json_decode($body, JSON_OBJECT_AS_ARRAY)
        ]);
    }

}