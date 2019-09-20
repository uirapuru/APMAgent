<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Error\All\Of1;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class Then extends ClassStructure
{
    /** @var string */
    public $traceId;

    /** @var string */
    public $parentId;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->traceId = Schema::string();
        $ownerSchema->addPropertyMapping('trace_id', self::names()->traceId);
        $properties->parentId = Schema::string();
        $ownerSchema->addPropertyMapping('parent_id', self::names()->parentId);
        $ownerSchema->required = array(
            'trace_id',
            'parent_id',
        );
    }

    /**
     * @param string $traceId
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setTraceId($traceId)
    {
        $this->traceId = $traceId;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $parentId
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}