<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Transaction\Timestamp;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Timestamp Epoch
 * Object with 'timestamp' property.
 * Built from ../timestamp_epoch.json
 */
class Epoch extends ClassStructure
{
    /** @var int|null Recorded time of the event, UTC based and formatted as microseconds since Unix epoch */
    public $timestamp;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->timestamp = (new Schema())->setType(array(
            0 => 'integer',
            1 => 'null',
        ));
        $properties->timestamp->description = "Recorded time of the event, UTC based and formatted as microseconds since Unix epoch";
        $ownerSchema->type = array(
            0 => 'object',
        );
        $ownerSchema->title = "Timestamp Epoch";
        $ownerSchema->description = "Object with 'timestamp' property.";
        $ownerSchema->setFromRef('../timestamp_epoch.json');
    }

    /**
     * @param int|null $timestamp Recorded time of the event, UTC based and formatted as microseconds since Unix epoch
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}