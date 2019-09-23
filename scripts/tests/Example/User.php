<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Swaggest\PhpCodeBuilder\Tests\Tmp\Example;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class User extends ClassStructure
{
    /** @var float */
    public $start;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->start = Schema::number();
        $ownerSchema->required = array(
            self::names()->start,
        );
    }

    /**
     * @param float $start
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setStart($start)
    {
        $this->start = $start;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}