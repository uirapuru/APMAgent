<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Error\Request;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * A complete Url, with scheme, host and path.
 */
class Url extends ClassStructure
{
    /** @var string|null The raw, unparsed URL of the HTTP request line, e.g https://example.com:443/search?q=elasticsearch. This URL may be absolute or relative. For more details, see https://www.w3.org/Protocols/rfc2616/rfc2616-sec5.html#sec5.1.2. */
    public $raw;

    /** @var string|null The protocol of the request, e.g. 'https:'. */
    public $protocol;

    /** @var string|null The full, possibly agent-assembled URL of the request, e.g https://example.com:443/search?q=elasticsearch#top. */
    public $full;

    /** @var string|null The hostname of the request, e.g. 'example.com'. */
    public $hostname;

    /** @var string|int|null The port of the request, e.g. '443' */
    public $port;

    /** @var string|null The path of the request, e.g. '/search' */
    public $pathname;

    /** @var string|null The search describes the query string of the request. It is expected to have values delimited by ampersands. */
    public $search;

    /** @var string|null The hash of the request URL, e.g. 'top' */
    public $hash;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->raw = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->raw->description = "The raw, unparsed URL of the HTTP request line, e.g https://example.com:443/search?q=elasticsearch. This URL may be absolute or relative. For more details, see https://www.w3.org/Protocols/rfc2616/rfc2616-sec5.html#sec5.1.2.";
        $properties->raw->maxLength = 1024;
        $properties->protocol = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->protocol->description = "The protocol of the request, e.g. 'https:'.";
        $properties->protocol->maxLength = 1024;
        $properties->full = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->full->description = "The full, possibly agent-assembled URL of the request, e.g https://example.com:443/search?q=elasticsearch#top.";
        $properties->full->maxLength = 1024;
        $properties->hostname = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->hostname->description = "The hostname of the request, e.g. 'example.com'.";
        $properties->hostname->maxLength = 1024;
        $properties->port = (new Schema())->setType(array(
            0 => 'string',
            1 => 'integer',
            2 => 'null',
        ));
        $properties->port->description = "The port of the request, e.g. '443'";
        $properties->port->maxLength = 1024;
        $properties->pathname = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->pathname->description = "The path of the request, e.g. '/search'";
        $properties->pathname->maxLength = 1024;
        $properties->search = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->search->description = "The search describes the query string of the request. It is expected to have values delimited by ampersands.";
        $properties->search->maxLength = 1024;
        $properties->hash = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->hash->description = "The hash of the request URL, e.g. 'top'";
        $properties->hash->maxLength = 1024;
        $ownerSchema->type = 'object';
        $ownerSchema->description = "A complete Url, with scheme, host and path.";
    }

    /**
     * @param string|null $raw The raw, unparsed URL of the HTTP request line, e.g https://example.com:443/search?q=elasticsearch. This URL may be absolute or relative. For more details, see https://www.w3.org/Protocols/rfc2616/rfc2616-sec5.html#sec5.1.2.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRaw($raw)
    {
        $this->raw = $raw;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $protocol The protocol of the request, e.g. 'https:'.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $full The full, possibly agent-assembled URL of the request, e.g https://example.com:443/search?q=elasticsearch#top.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setFull($full)
    {
        $this->full = $full;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $hostname The hostname of the request, e.g. 'example.com'.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|int|null $port The port of the request, e.g. '443'
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $pathname The path of the request, e.g. '/search'
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPathname($pathname)
    {
        $this->pathname = $pathname;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $search The search describes the query string of the request. It is expected to have values delimited by ampersands.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSearch($search)
    {
        $this->search = $search;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $hash The hash of the request URL, e.g. 'top'
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}