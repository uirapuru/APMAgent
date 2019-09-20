<?php

namespace Test;

use APM\Metadata\Metadata;
use APM\Metadata\Service;
use APM\Metadata\Service\Agent;
use PHPUnit\Framework\TestCase;

class ModelTest extends TestCase
{
    public function test_metadata_serializing() {

        $metadata = new Metadata();
        $metadata->service = (new Service)->setName("hello world")->setAgent(
            (new Agent)->setName("agent name")->setVersion("1.0")
        );

        die(var_dump(json_encode(Metadata::export($metadata))));

    }
}