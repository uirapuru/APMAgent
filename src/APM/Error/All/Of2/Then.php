<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Error\All\Of2;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class Then extends ClassStructure
{
    /** @var string */
    public $parentId;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->parentId = Schema::string();
        $ownerSchema->addPropertyMapping('parent_id', self::names()->parentId);
        $ownerSchema->required = array(
            'parent_id',
        );
    }

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