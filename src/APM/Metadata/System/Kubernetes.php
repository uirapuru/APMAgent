<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Metadata\System;

use APM\Metadata\System\Kubernetes\Node;
use APM\Metadata\System\Kubernetes\Pod;
use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class Kubernetes extends ClassStructure
{
    /** @var string|null Kubernetes namespace */
    public $namespace;

    /** @var Pod */
    public $pod;

    /** @var Node */
    public $node;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->namespace = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->namespace->description = "Kubernetes namespace";
        $properties->namespace->maxLength = 1024;
        $properties->pod = Pod::schema();
        $properties->node = Node::schema();
    }

    /**
     * @param string|null $namespace Kubernetes namespace
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Pod $pod
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPod(Pod $pod)
    {
        $this->pod = $pod;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Node $node
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setNode(Node $node)
    {
        $this->node = $node;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}