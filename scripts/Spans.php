<?php

require_once __DIR__ . '/../vendor/autoload.php';

$file = __DIR__ . "/Resources/doc/spec/spans/span.json";

$schemaData = json_decode(file_get_contents($file), JSON_OBJECT_AS_ARRAY);

$properties = $schemaData["allOf"];

$traits = array_column($properties, "\$ref");

die(var_dump($traits));
