<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Swaggest\PhpCodeBuilder\Tests\Tmp\Example;

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
    /** @var ContextDb|null An object containing contextual data for database spans */
    public $db;

    /** @var ContextHttp|null An object containing contextual data of the related http request. */
    public $http;

    /** @var mixed */
    public $tags;

    /** @var ContextService Service related information can be sent per event. Provided information will override the more generic information from metadata, non provided fields will be set according to the metadata information. */
    public $service;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->db = ContextDb::schema();
        $properties->http = ContextHttp::schema();
        $properties->tags = new Schema();
        $properties->tags->not = new Schema();
        $properties->tags->setFromRef('../tags.json');
        $properties->service = ContextService::schema();
        $ownerSchema->type = array(
            0 => 'object',
            1 => 'null',
        );
        $ownerSchema->description = "Any other arbitrary data captured by the agent, optionally provided by the user";
    }

    /**
     * @param ContextDb|null $db An object containing contextual data for database spans
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
     * @param ContextHttp|null $http An object containing contextual data of the related http request.
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
     * @param mixed $tags
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
     * @param ContextService $service Service related information can be sent per event. Provided information will override the more generic information from metadata, non provided fields will be set according to the metadata information.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setService(ContextService $service)
    {
        $this->service = $service;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}