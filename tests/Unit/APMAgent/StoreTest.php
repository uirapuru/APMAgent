<?php
namespace Test\Unit\APMAgent;

use APM\Span\Span;
use APMAgent\Store;
use Coduo\PHPMatcher\PHPUnit\PHPMatcherAssertions;
use APM\Metricset\Metricset;
use PHPUnit\Framework\TestCase;

class StoreTest extends TestCase
{
    use PHPMatcherAssertions;

    public function test_serialization()
    {
        $fixture = <<< JSON
{"span": {"trace_id": "abcdef0123456789abcdef9876543210", "parent_id": "0000000011111111", "id": "1234abcdef567895", "transaction_id": "ab45781d265894fe", "name": "GET /api/types", "type": "request", "start": 22, "duration": 32.592981, "timestamp": 1532976822281000,"context":{"service":{"environment":"prod","agent":{}}}}}
JSON;

        $decoded = json_decode($fixture);

        $span = Span::import($decoded->span);

//        $store = new Store([
//            ,
//            Span::import($decoded->span),
//            Span::import($decoded->span)
//        ]);

        $json = $store->jsonSerialize();

        $this->assertEquals("", $json);
    }
}