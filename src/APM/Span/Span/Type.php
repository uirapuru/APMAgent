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
 * Span Type
 * Built from ../span_type.json
 */
class Type extends ClassStructure
{
    /** @var string Keyword of specific relevance in the service's domain (eg: 'db.postgresql.query', 'template.erb', etc) */
    public $type;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->type = Schema::string();
        $properties->type->description = "Keyword of specific relevance in the service's domain (eg: 'db.postgresql.query', 'template.erb', etc)";
        $properties->type->maxLength = 1024;
        $ownerSchema->type = array(
            0 => 'object',
        );
        $ownerSchema->title = "Span Type";
        $ownerSchema->setFromRef('../span_type.json');
    }
}