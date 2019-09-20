<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Error\Exception\Any;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class Of0 extends ClassStructure
{
    /** @var string */
    public $message;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->message = Schema::string();
        $ownerSchema->required = array(
            self::names()->message,
        );
    }

    /**
     * @param string $message
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}