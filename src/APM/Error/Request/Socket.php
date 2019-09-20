<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Error\Request;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * @method static Socket|null import($data, Context $options = null)
 */
class Socket extends ClassStructure
{
    /** @var bool|null Indicates whether request was sent as SSL/HTTPS request. */
    public $encrypted;

    /** @var string|null */
    public $remoteAddress;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->encrypted = (new Schema())->setType(array(
            0 => 'boolean',
            1 => 'null',
        ));
        $properties->encrypted->description = "Indicates whether request was sent as SSL/HTTPS request.";
        $properties->remoteAddress = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $ownerSchema->addPropertyMapping('remote_address', self::names()->remoteAddress);
        $ownerSchema->type = array(
            0 => 'object',
            1 => 'null',
        );
    }

    /**
     * @param bool|null $encrypted Indicates whether request was sent as SSL/HTTPS request.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setEncrypted($encrypted)
    {
        $this->encrypted = $encrypted;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $remoteAddress
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRemoteAddress($remoteAddress)
    {
        $this->remoteAddress = $remoteAddress;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}