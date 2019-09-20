<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Transaction\Request;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * The env variable is a compounded of environment information passed from the webserver.
 * @method static Env|null import($data, Context $options = null)
 */
class Env extends ClassStructure
{
    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $ownerSchema->type = array(
            0 => 'object',
            1 => 'null',
        );
        $ownerSchema->description = "The env variable is a compounded of environment information passed from the webserver.";
    }
}