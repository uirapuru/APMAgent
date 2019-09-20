<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Transaction\Span;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class Count extends ClassStructure
{
    /** @var int Number of correlated spans that are recorded. */
    public $started;

    /** @var int|null Number of spans that have been dropped by the agent recording the transaction. */
    public $dropped;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->started = Schema::integer();
        $properties->started->description = "Number of correlated spans that are recorded.";
        $properties->dropped = (new Schema())->setType(array(
            0 => 'integer',
            1 => 'null',
        ));
        $properties->dropped->description = "Number of spans that have been dropped by the agent recording the transaction.";
        $ownerSchema->type = 'object';
        $ownerSchema->required = array(
            self::names()->started,
        );
    }

    /**
     * @param int $started Number of correlated spans that are recorded.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setStarted($started)
    {
        $this->started = $started;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int|null $dropped Number of spans that have been dropped by the agent recording the transaction.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDropped($dropped)
    {
        $this->dropped = $dropped;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}