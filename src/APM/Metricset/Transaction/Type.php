<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Metricset\Transaction;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Transaction Type
 * Built from ../transaction_type.json
 */
class Type extends ClassStructure
{
    /** @var string Keyword of specific relevance in the service's domain (eg: 'request', 'backgroundjob', etc) */
    public $type;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->type = Schema::string();
        $properties->type->description = "Keyword of specific relevance in the service's domain (eg: 'request', 'backgroundjob', etc)";
        $properties->type->maxLength = 1024;
        $ownerSchema->type = array(
            0 => 'object',
        );
        $ownerSchema->title = "Transaction Type";
        $ownerSchema->setFromRef('../transaction_type.json');
    }

    /**
     * @param string $type Keyword of specific relevance in the service's domain (eg: 'request', 'backgroundjob', etc)
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}