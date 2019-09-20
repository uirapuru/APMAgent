<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Error\Any;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class Of0 extends ClassStructure
{
    /** @var mixed */
    public $exception;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->exception = Schema::object();
        $ownerSchema->required = array(
            self::names()->exception,
        );
    }

    /**
     * @param mixed $exception
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setException($exception)
    {
        $this->exception = $exception;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}