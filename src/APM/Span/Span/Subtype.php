<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Span\Span;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Span Subtype
 * Built from ../span_subtype.json
 */
class Subtype extends ClassStructure
{
    /** @var string|null A further sub-division of the type (e.g. postgresql, elasticsearch) */
    public $subtype;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->subtype = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->subtype->description = "A further sub-division of the type (e.g. postgresql, elasticsearch)";
        $properties->subtype->maxLength = 1024;
        $ownerSchema->type = array(
            0 => 'object',
        );
        $ownerSchema->title = "Span Subtype";
        $ownerSchema->setFromRef('../span_subtype.json');
    }

    /**
     * @param string|null $subtype A further sub-division of the type (e.g. postgresql, elasticsearch)
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSubtype($subtype)
    {
        $this->subtype = $subtype;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}