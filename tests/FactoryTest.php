<?php

namespace Test;

use APM\Metadata\Metadata;
use APMAgent\Factory\EventFactory;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    public function test()
    {
        $expected = <<<JSON
{"metadata": {"process": {"pid": 1234}, "system": {"container": {"id": "container-id"}, "kubernetes": {"namespace": "namespace1", "pod": {"uid": "pod-uid", "name": "pod-name"}, "node": {"name": "node-name"}}}, "service": {"name": "1234_service-12a3", "language": {"name": "ecmascript"}, "agent": {"version": "3.14.0", "name": "elastic-node"}, "framework": {"name": "emac"}}}}
JSON;

        $metadata = EventFactory::metadata()->get();

        $this->assertEquals($expected, json_encode(Metadata::export($metadata)));

    }
}