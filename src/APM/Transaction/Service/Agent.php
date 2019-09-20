<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Transaction\Service;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Name and version of the Elastic APM agent
 * @method static Agent|null import($data, Context $options = null)
 */
class Agent extends ClassStructure
{
    /** @var string|null Name of the Elastic APM agent, e.g. "Python" */
    public $name;

    /** @var string|null Version of the Elastic APM agent, e.g."1.0.0" */
    public $version;

    /** @var string|null Free format ID used for metrics correlation by some agents */
    public $ephemeralId;

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
        $properties->name->description = "Name of the Elastic APM agent, e.g. \"Python\"";
        $properties->name->maxLength = 1024;
        $properties->version = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->version->description = "Version of the Elastic APM agent, e.g.\"1.0.0\"";
        $properties->version->maxLength = 1024;
        $properties->ephemeralId = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->ephemeralId->description = "Free format ID used for metrics correlation by some agents";
        $properties->ephemeralId->maxLength = 1024;
        $ownerSchema->addPropertyMapping('ephemeral_id', self::names()->ephemeralId);
        $ownerSchema->type = array(
            0 => 'object',
            1 => 'null',
        );
        $ownerSchema->description = "Name and version of the Elastic APM agent";
    }

    /**
     * @param string|null $name Name of the Elastic APM agent, e.g. "Python"
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $version Version of the Elastic APM agent, e.g."1.0.0"
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $ephemeralId Free format ID used for metrics correlation by some agents
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setEphemeralId($ephemeralId)
    {
        $this->ephemeralId = $ephemeralId;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}