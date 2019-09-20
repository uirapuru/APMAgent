<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Transaction;

use APM\Transaction\Context\Page;
use APM\Transaction\Context\Response;
use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context as Context1;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Context
 * Any arbitrary contextual information regarding the event, captured by the agent, optionally provided by the user
 * Built from ../context.json
 * @method static Context|null import($data, Context1 $options = null)
 */
class Context extends ClassStructure
{
    /** @var null An arbitrary mapping of additional metadata to store with the event. */
    public $custom;

    /** @var Response|null */
    public $response;

    /** @var Request|null If a log record was generated as a result of a http request, the http interface can be used to collect this information. */
    public $request;

    /** @var string[]|bool[]|float[]|null[]|null A flat mapping of user-defined tags with string, boolean or number values. */
    public $tags;

    /** @var User|null */
    public $user;

    /** @var Page|null */
    public $page;

    /** @var Service|null */
    public $service;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->custom = (new Schema())->setType(array(
            0 => 'object',
            1 => 'null',
        ));
        $properties->custom->additionalProperties = false;
        $property19ce08 = new Schema();
        $properties->custom->setPatternProperty('^[^.*"]*$', $property19ce08);
        $properties->custom->description = "An arbitrary mapping of additional metadata to store with the event.";
        $properties->response = Response::schema();
        $properties->request = Request::schema();
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
        $properties->tags->setFromRef('tags.json');
        $properties->user = User::schema();
        $properties->page = Page::schema();
        $properties->service = Service::schema();
        $ownerSchema->type = array(
            0 => 'object',
            1 => 'null',
        );
        $ownerSchema->title = "Context";
        $ownerSchema->description = "Any arbitrary contextual information regarding the event, captured by the agent, optionally provided by the user";
        $ownerSchema->setFromRef('../context.json');
    }

    /**
     * @param null $custom An arbitrary mapping of additional metadata to store with the event.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCustom($custom)
    {
        $this->custom = $custom;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Response|null $response
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Request|null $request If a log record was generated as a result of a http request, the http interface can be used to collect this information.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRequest($request)
    {
        $this->request = $request;
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
     * @param Page|null $page
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

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
}