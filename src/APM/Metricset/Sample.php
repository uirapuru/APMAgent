<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Metricset;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * A single metric sample.
 * Built from sample.json
 * @method static Sample|null import($data, Context $options = null)
 */
class Sample extends ClassStructure
{
    /** @var float */
    public $value;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->value = Schema::number();
        $ownerSchema->type = array(
            0 => 'object',
            1 => 'null',
        );
        $ownerSchema->schema = "http://json-schema.org/draft-04/schema#";
        $ownerSchema->description = "A single metric sample.";
        $ownerSchema->required = array(
            self::names()->value,
        );
        $ownerSchema->setFromRef('sample.json');
    }

    /**
     * @param float $value
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}