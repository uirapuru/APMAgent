<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Span\Context;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * An object containing contextual data of the related http request.
 * @method static Http|null import($data, Context $options = null)
 */
class Http extends ClassStructure
{
    /** @var string|null The raw url of the correlating http request. */
    public $url;

    /** @var int|null The status code of the http request. */
    public $statusCode;

    /** @var string|null The method of the http request. */
    public $method;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->url = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->url->description = "The raw url of the correlating http request.";
        $properties->statusCode = (new Schema())->setType(array(
            0 => 'integer',
            1 => 'null',
        ));
        $properties->statusCode->description = "The status code of the http request.";
        $ownerSchema->addPropertyMapping('status_code', self::names()->statusCode);
        $properties->method = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->method->description = "The method of the http request.";
        $properties->method->maxLength = 1024;
        $ownerSchema->type = array(
            0 => 'object',
            1 => 'null',
        );
        $ownerSchema->description = "An object containing contextual data of the related http request.";
    }
}