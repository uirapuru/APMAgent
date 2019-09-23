<?php

require_once __DIR__ . '/../vendor/autoload.php';

function recursiveFind(array $haystack, $needle)
{
    $iterator  = new RecursiveArrayIterator($haystack);
    $recursive = new RecursiveIteratorIterator(
        $iterator,
        RecursiveIteratorIterator::SELF_FIRST
    );
    foreach ($recursive as $key => $value) {
        if ($key === $needle) {
            yield $value;
        }
    }
}

$file = __DIR__ . "/Resources/doc/spec/spans/span.json";
$file = __DIR__ . "/Resources/doc/spec/errors/error.json";

$cache = [];

load($file, $cache);

var_dump($cache);

function load(string $file, &$cache) {
    $schemaData = json_decode(file_get_contents($file), JSON_OBJECT_AS_ARRAY);

    $refs = array_unique(iterator_to_array(recursiveFind($schemaData, "\$ref")));
    $dirname = dirname($file);

    $cache[] = [
        "file" => basename($file),
        "dir" => $dirname,
        "refs" => $refs
    ];

    foreach($refs as $ref) {
        $refFile = realpath($dirname . "/" . $ref);
        load($refFile, $cache);
    }
}
