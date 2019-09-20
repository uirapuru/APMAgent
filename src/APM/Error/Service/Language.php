<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Error\Service;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Name and version of the programming language used
 * @method static Language|null import($data, Context $options = null)
 */
class Language extends ClassStructure
{
    /** @var string|null */
    public $name;

    /** @var string|null */
    public $version;

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
        $properties->name->maxLength = 1024;
        $properties->version = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->version->maxLength = 1024;
        $ownerSchema->type = array(
            0 => 'object',
            1 => 'null',
        );
        $ownerSchema->description = "Name and version of the programming language used";
    }

    /**
     * @param string|null $name
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
     * @param string|null $version
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}