<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Metadata\System;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class Container extends ClassStructure
{
    /** @var string Container ID */
    public $id;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->id = (new Schema())->setType(array(
            0 => 'string',
        ));
        $properties->id->description = "Container ID";
        $properties->id->maxLength = 1024;
        $ownerSchema->required = array(
            self::names()->id,
        );
    }

    /**
     * @param string $id Container ID
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}