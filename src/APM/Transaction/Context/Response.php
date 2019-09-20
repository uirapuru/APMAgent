<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Transaction\Context;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * @method static Response|null import($data, Context $options = null)
 */
class Response extends ClassStructure
{
    /** @var bool|null A boolean indicating whether the response was finished or not */
    public $finished;

    /** @var string[][]|string[]|array[]|null[]|null A mapping of HTTP headers of the response object */
    public $headers;

    /** @var bool|null */
    public $headersSent;

    /** @var int|null The HTTP status code of the response. */
    public $statusCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->finished = (new Schema())->setType(array(
            0 => 'boolean',
            1 => 'null',
        ));
        $properties->finished->description = "A boolean indicating whether the response was finished or not";
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
        $properties->headers->description = "A mapping of HTTP headers of the response object";
        $properties->headersSent = (new Schema())->setType(array(
            0 => 'boolean',
            1 => 'null',
        ));
        $ownerSchema->addPropertyMapping('headers_sent', self::names()->headersSent);
        $properties->statusCode = (new Schema())->setType(array(
            0 => 'integer',
            1 => 'null',
        ));
        $properties->statusCode->description = "The HTTP status code of the response.";
        $ownerSchema->addPropertyMapping('status_code', self::names()->statusCode);
        $ownerSchema->type = array(
            0 => 'object',
            1 => 'null',
        );
    }

    /**
     * @param bool|null $finished A boolean indicating whether the response was finished or not
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setFinished($finished)
    {
        $this->finished = $finished;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[][]|string[]|array[]|null[]|null $headers A mapping of HTTP headers of the response object
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
     * @param bool|null $headersSent
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setHeadersSent($headersSent)
    {
        $this->headersSent = $headersSent;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int|null $statusCode The HTTP status code of the response.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}