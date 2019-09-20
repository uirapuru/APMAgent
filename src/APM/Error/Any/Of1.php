<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Error\Any;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class Of1 extends ClassStructure
{
    /** @var mixed */
    public $log;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->log = Schema::object();
        $ownerSchema->required = array(
            self::names()->log,
        );
    }

    /**
     * @param mixed $log
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setLog($log)
    {
        $this->log = $log;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}