<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Metadata\System\Kubernetes;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class Node extends ClassStructure
{
    /** @var string|null Kubernetes node name */
    public $name;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->name = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->name->description = "Kubernetes node name";
        $properties->name->maxLength = 1024;
    }

    /**
     * @param string|null $name Kubernetes node name
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}