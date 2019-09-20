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
 * Transaction Name
 * Built from ../transaction_name.json
 */
class Name extends ClassStructure
{
    /** @var string|null Generic designation of a transaction in the scope of a single service (eg: 'GET /users/:id') */
    public $name;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->name = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->name->description = "Generic designation of a transaction in the scope of a single service (eg: 'GET /users/:id')";
        $properties->name->maxLength = 1024;
        $ownerSchema->type = array(
            0 => 'object',
        );
        $ownerSchema->title = "Transaction Name";
        $ownerSchema->setFromRef('../transaction_name.json');
    }

    /**
     * @param string|null $name Generic designation of a transaction in the scope of a single service (eg: 'GET /users/:id')
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}