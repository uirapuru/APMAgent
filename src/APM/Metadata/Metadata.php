<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Metadata;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Metadata
 * Metadata concerning the other objects in the stream.
 */
class Metadata extends ClassStructure
{
    /** @var Service|null */
    public $service;

    /** @var Process|null */
    public $process;

    /** @var System|null */
    public $system;

    /** @var User|null */
    public $user;

    /** @var string[]|bool[]|float[]|null[]|null A flat mapping of user-defined tags with string, boolean or number values. */
    public $labels;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->service = Service::schema();
        $properties->process = Process::schema();
        $properties->system = System::schema();
        $properties->user = User::schema();
        $properties->labels = (new Schema())->setType(array(
            0 => 'object',
            1 => 'null',
        ));
        $properties->labels->additionalProperties = false;
        $property19ce08 = (new Schema())->setType(array(
            0 => 'string',
            1 => 'boolean',
            2 => 'number',
            3 => 'null',
        ));
        $property19ce08->maxLength = 1024;
        $properties->labels->setPatternProperty('^[^.*"]*$', $property19ce08);
        $properties->labels->title = "Tags";
        $properties->labels->description = "A flat mapping of user-defined tags with string, boolean or number values.";
        $properties->labels->setFromRef('tags.json');
        $ownerSchema->type = array(
            0 => 'object',
        );
        $ownerSchema->title = "Metadata";
        $ownerSchema->description = "Metadata concerning the other objects in the stream.";
        $ownerSchema->required = array(
            self::names()->service,
        );
    }

    /**
     * @param Service|null $service
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Process|null $process
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setProcess($process)
    {
        $this->process = $process;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param System|null $system
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSystem($system)
    {
        $this->system = $system;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param User|null $user
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|bool[]|float[]|null[]|null $labels A flat mapping of user-defined tags with string, boolean or number values.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}