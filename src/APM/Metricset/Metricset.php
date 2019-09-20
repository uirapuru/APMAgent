<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Metricset;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class Metricset extends ClassStructure
{
    /** @var Sample[]|null[] Sampled application metrics collected from the agent. */
    public $samples;

    /** @var string[]|bool[]|float[]|null[]|null A flat mapping of user-defined tags with string, boolean or number values. */
    public $tags;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->samples = (new Schema())->setType(array(
            0 => 'object',
        ));
        $properties->samples->additionalProperties = false;
        $propertyd6a384 = Sample::schema();
        $properties->samples->setPatternProperty('^[^*"]*$', $propertyd6a384);
        $properties->samples->description = "Sampled application metrics collected from the agent.";
        $properties->tags = (new Schema())->setType(array(
            0 => 'object',
            1 => 'null',
        ));
        $properties->tags->additionalProperties = false;
        $property19ce08 = (new Schema())->setType(array(
            0 => 'string',
            1 => 'boolean',
            2 => 'number',
            3 => 'null',
        ));
        $property19ce08->maxLength = 1024;
        $properties->tags->setPatternProperty('^[^.*"]*$', $property19ce08);
        $properties->tags->title = "Tags";
        $properties->tags->description = "A flat mapping of user-defined tags with string, boolean or number values.";
        $properties->tags->setFromRef('../tags.json');
        $ownerSchema->required = array(
            self::names()->samples,
        );
    }

    /**
     * @param Sample[]|null[] $samples Sampled application metrics collected from the agent.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSamples($samples)
    {
        $this->samples = $samples;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|bool[]|float[]|null[]|null $tags A flat mapping of user-defined tags with string, boolean or number values.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}