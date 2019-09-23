<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Swaggest\PhpCodeBuilder\Tests\Tmp\Example;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Service related information can be sent per event. Provided information will override the more generic information from metadata, non provided fields will be set according to the metadata information.
 */
class ContextService extends ClassStructure
{
    /** @var ContextServiceAgent|null Name and version of the Elastic APM agent */
    public $agent;

    /** @var string|null Immutable name of the service emitting this event */
    public $name;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->agent = ContextServiceAgent::schema();
        $properties->name = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->name->description = "Immutable name of the service emitting this event";
        $properties->name->maxLength = 1024;
        $properties->name->pattern = "^[a-zA-Z0-9 _-]+$";
        $ownerSchema->description = "Service related information can be sent per event. Provided information will override the more generic information from metadata, non provided fields will be set according to the metadata information.";
    }

    /**
     * @param ContextServiceAgent|null $agent Name and version of the Elastic APM agent
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $name Immutable name of the service emitting this event
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