<?php

require_once __DIR__ . '/../vendor/autoload.php';

$array = [
//    "Metadata" => "metadata.json",
//    "Transaction" => "transactions/transaction.json",
    "Span" => "spans/span.json",
//    "Error" => "errors/error.json",
//    "Metricset" => "metricsets/metricset.json",
];

chdir(realpath(__DIR__ . "/Resources"));

foreach($array as $class => $file) {
    generate($class, $file);
}

function generate($rootClass, $file) {
    $schemaData = json_decode(file_get_contents(__DIR__ . '/Resources/docs/spec/' . $file));

    $swaggerSchema = \Swaggest\JsonSchema\Schema::import($schemaData);

    $appPath = realpath(__DIR__ . '/../src/APM') . "/" . $rootClass;
    $appNs = 'APM\\' . $rootClass;

    $app = new \Swaggest\PhpCodeBuilder\App\PhpApp();
    $app->setNamespaceRoot($appNs, '.');

    $builder = new \Swaggest\PhpCodeBuilder\JsonSchema\PhpBuilder();
    $builder->buildSetters = false;
    $builder->buildGetters = false;
    $builder->makeEnumConstants = true;
    $builder->namesFromDescriptions = true;

    $builder->classCreatedHook = new \Swaggest\PhpCodeBuilder\JsonSchema\ClassHookCallback(
        function (\Swaggest\PhpCodeBuilder\PhpClass $class, $path, $schema) use ($app, $appNs, $rootClass) {
            $desc = '';
            if ($schema->title) {
                $desc = $schema->title;
            }
            if ($schema->description) {
                $desc .= "\n" . $schema->description;
            }
            if ($fromRefs = $schema->getFromRefs()) {
                $desc .= "\nBuilt from " . implode("\n" . ' <- ', $fromRefs);
            }

            $class->setDescription(trim($desc));

            if ('#' === $path) {
                $class->setName($rootClass);
            } elseif (strpos($path, '#/definitions/') === 0) {
                $class->setName(\Swaggest\PhpCodeBuilder\PhpCode::makePhpClassName(
                    substr($path, strlen('#/definitions/'))));
            }

            $fqcn = preg_split('/(?=[A-Z])/', $class->getName(), -1, PREG_SPLIT_NO_EMPTY);

            $fqcn = array_filter($fqcn, function($name) : bool {
                return $name !== "Json";
            });

            $name = array_pop($fqcn);

            if(in_array($name, ["If"])) {
                $name.="Class";
            }

            $namespace = implode("\\", $fqcn);

            $class->setName($name);

            $class->setNamespace($appNs . "\\" . $namespace);

            $app->addClass($class);
        }
    );


    $builder->getType($swaggerSchema);
    $app->clearOldFiles($appPath);
    $app->store($appPath);
}