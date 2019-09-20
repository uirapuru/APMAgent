<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Error;

use APM\Error\Service\Agent;
use APM\Error\Service\Framework;
use APM\Error\Service\Language;
use APM\Error\Service\Runtime;
use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Service
 * Built from service.json
 * @method static Service|null import($data, Context $options = null)
 */
class Service extends ClassStructure
{
    /** @var Agent|null Name and version of the Elastic APM agent */
    public $agent;

    /** @var Framework|null Name and version of the web framework used */
    public $framework;

    /** @var Language|null Name and version of the programming language used */
    public $language;

    /** @var string|null Immutable name of the service emitting this event */
    public $name;

    /** @var string|null Environment name of the service, e.g. "production" or "staging" */
    public $environment;

    /** @var Runtime|null Name and version of the language runtime running this service */
    public $runtime;

    /** @var string|null Version of the service emitting this event */
    public $version;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->agent = Agent::schema();
        $properties->framework = Framework::schema();
        $properties->language = Language::schema();
        $properties->name = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->name->description = "Immutable name of the service emitting this event";
        $properties->name->maxLength = 1024;
        $properties->name->pattern = "^[a-zA-Z0-9 _-]+$";
        $properties->environment = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->environment->description = "Environment name of the service, e.g. \"production\" or \"staging\"";
        $properties->environment->maxLength = 1024;
        $properties->runtime = Runtime::schema();
        $properties->version = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->version->description = "Version of the service emitting this event";
        $properties->version->maxLength = 1024;
        $ownerSchema->type = array(
            0 => 'object',
            1 => 'null',
        );
        $ownerSchema->title = "Service";
        $ownerSchema->setFromRef('service.json');
    }

    /**
     * @param Agent|null $agent Name and version of the Elastic APM agent
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
     * @param Framework|null $framework Name and version of the web framework used
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setFramework($framework)
    {
        $this->framework = $framework;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Language|null $language Name and version of the programming language used
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setLanguage($language)
    {
        $this->language = $language;
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

    /**
     * @param string|null $environment Environment name of the service, e.g. "production" or "staging"
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Runtime|null $runtime Name and version of the language runtime running this service
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $version Version of the service emitting this event
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