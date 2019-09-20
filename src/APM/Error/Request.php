<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Error;

use APM\Error\Request\Env;
use APM\Error\Request\Socket;
use APM\Error\Request\Url;
use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Request
 * If a log record was generated as a result of a http request, the http interface can be used to collect this information.
 * Built from request.json
 * @method static Request|null import($data, Context $options = null)
 */
class Request extends ClassStructure
{
    /** @var string|null Data should only contain the request body (not the query string). It can either be a dictionary (for standard HTTP requests) or a raw request body. */
    public $body;

    /** @var Env|null The env variable is a compounded of environment information passed from the webserver. */
    public $env;

    /** @var string[][]|string[]|array[]|null[]|null Should include any headers sent by the requester. Cookies will be taken by headers if supplied. */
    public $headers;

    /** @var string|null HTTP version. */
    public $httpVersion;

    /** @var string HTTP method. */
    public $method;

    /** @var Socket|null */
    public $socket;

    /** @var Url A complete Url, with scheme, host and path. */
    public $url;

    /** @var null A parsed key-value object of cookies */
    public $cookies;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->body = (new Schema())->setType(array(
            0 => 'object',
            1 => 'string',
            2 => 'null',
        ));
        $properties->body->description = "Data should only contain the request body (not the query string). It can either be a dictionary (for standard HTTP requests) or a raw request body.";
        $properties->env = Env::schema();
        $properties->headers = (new Schema())->setType(array(
            0 => 'object',
            1 => 'null',
        ));
        $property75952c = (new Schema())->setType(array(
            0 => 'string',
            1 => 'array',
            2 => 'null',
        ));
        $property75952c->items = (new Schema())->setType(array(
            0 => 'string',
        ));
        $properties->headers->setPatternProperty('[.*]*$', $property75952c);
        $properties->headers->description = "Should include any headers sent by the requester. Cookies will be taken by headers if supplied.";
        $properties->httpVersion = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->httpVersion->description = "HTTP version.";
        $properties->httpVersion->maxLength = 1024;
        $ownerSchema->addPropertyMapping('http_version', self::names()->httpVersion);
        $properties->method = Schema::string();
        $properties->method->description = "HTTP method.";
        $properties->method->maxLength = 1024;
        $properties->socket = Socket::schema();
        $properties->url = Url::schema();
        $properties->cookies = (new Schema())->setType(array(
            0 => 'object',
            1 => 'null',
        ));
        $properties->cookies->description = "A parsed key-value object of cookies";
        $ownerSchema->type = array(
            0 => 'object',
            1 => 'null',
        );
        $ownerSchema->title = "Request";
        $ownerSchema->description = "If a log record was generated as a result of a http request, the http interface can be used to collect this information.";
        $ownerSchema->required = array(
            self::names()->url,
            self::names()->method,
        );
        $ownerSchema->setFromRef('request.json');
    }

    /**
     * @param string|null $body Data should only contain the request body (not the query string). It can either be a dictionary (for standard HTTP requests) or a raw request body.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Env|null $env The env variable is a compounded of environment information passed from the webserver.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setEnv($env)
    {
        $this->env = $env;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[][]|string[]|array[]|null[]|null $headers Should include any headers sent by the requester. Cookies will be taken by headers if supplied.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $httpVersion HTTP version.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setHttpVersion($httpVersion)
    {
        $this->httpVersion = $httpVersion;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $method HTTP method.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Socket|null $socket
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSocket($socket)
    {
        $this->socket = $socket;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Url $url A complete Url, with scheme, host and path.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setUrl(Url $url)
    {
        $this->url = $url;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param null $cookies A parsed key-value object of cookies
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCookies($cookies)
    {
        $this->cookies = $cookies;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}