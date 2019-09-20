<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Error\All\Of1;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class IfClass extends ClassStructure
{
    /** @var string */
    public $transactionId;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->transactionId = Schema::string();
        $ownerSchema->addPropertyMapping('transaction_id', self::names()->transactionId);
        $ownerSchema->required = array(
            'transaction_id',
        );
    }

    /**
     * @param string $transactionId
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}