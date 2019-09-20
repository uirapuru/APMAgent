<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Error;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Data for correlating errors with transactions
 * @method static Transaction|null import($data, Context $options = null)
 */
class Transaction extends ClassStructure
{
    /** @var bool|null Transactions that are 'sampled' will include all available information. Transactions that are not sampled will not have 'spans' or 'context'. Defaults to true. */
    public $sampled;

    /** @var string|null Keyword of specific relevance in the service's domain (eg: 'request', 'backgroundjob', etc) */
    public $type;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->sampled = (new Schema())->setType(array(
            0 => 'boolean',
            1 => 'null',
        ));
        $properties->sampled->description = "Transactions that are 'sampled' will include all available information. Transactions that are not sampled will not have 'spans' or 'context'. Defaults to true.";
        $properties->type = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->type->description = "Keyword of specific relevance in the service's domain (eg: 'request', 'backgroundjob', etc)";
        $properties->type->maxLength = 1024;
        $ownerSchema->type = array(
            0 => 'object',
            1 => 'null',
        );
        $ownerSchema->description = "Data for correlating errors with transactions";
    }

    /**
     * @param bool|null $sampled Transactions that are 'sampled' will include all available information. Transactions that are not sampled will not have 'spans' or 'context'. Defaults to true.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSampled($sampled)
    {
        $this->sampled = $sampled;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $type Keyword of specific relevance in the service's domain (eg: 'request', 'backgroundjob', etc)
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