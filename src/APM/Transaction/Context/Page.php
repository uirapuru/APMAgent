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
 * @method static Page|null import($data, Context $options = null)
 */
class Page extends ClassStructure
{
    /** @var string|null RUM specific field that stores the URL of the page that 'linked' to the current page. */
    public $referer;

    /** @var string|null RUM specific field that stores the URL of the current page */
    public $url;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->referer = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->referer->description = "RUM specific field that stores the URL of the page that 'linked' to the current page.";
        $properties->url = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->url->description = "RUM specific field that stores the URL of the current page";
        $ownerSchema->type = array(
            0 => 'object',
            1 => 'null',
        );
        $ownerSchema->description = "";
    }

    /**
     * @param string|null $referer RUM specific field that stores the URL of the page that 'linked' to the current page.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setReferer($referer)
    {
        $this->referer = $referer;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $url RUM specific field that stores the URL of the current page
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}