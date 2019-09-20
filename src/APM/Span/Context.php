<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Span;

use APM\Span\Context\Db;
use APM\Span\Context\Http;
use APM\Span\Context\Service;
use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context as Context1;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Any other arbitrary data captured by the agent, optionally provided by the user
 * @method static Context|null import($data, Context1 $options = null)
 */
class Context extends ClassStructure
{
    /** @var Db|null An object containing contextual data for database spans */
    public $db;

    /** @var Http|null An object containing contextual data of the related http request. */
    public $http;

    /** @var string[]|bool[]|float[]|null[]|null A flat mapping of user-defined tags with string, boolean or number values. */
    public $tags;

    /** @var Service Service related information can be sent per event. Provided information will override the more generic information from metadata, non provided fields will be set according to the metadata information. */
    public $service;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->db = Db::schema();
        $properties->http = Http::schema();
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
        $properties->service = Service::schema();
        $ownerSchema->type = array(
            0 => 'object',
            1 => 'null',
        );
        $ownerSchema->description = "Any other arbitrary data captured by the agent, optionally provided by the user";
    }

    /**
     * @param Db|null $db An object containing contextual data for database spans
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDb($db)
    {
        $this->db = $db;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Http|null $http An object containing contextual data of the related http request.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setHttp($http)
    {
        $this->http = $http;
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

    /**
     * @param Service $service Service related information can be sent per event. Provided information will override the more generic information from metadata, non provided fields will be set according to the metadata information.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setService(Service $service)
    {
        $this->service = $service;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}