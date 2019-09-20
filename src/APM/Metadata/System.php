<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Metadata;

use APM\Metadata\System\Container;
use APM\Metadata\System\Kubernetes;
use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * System
 * Built from system.json
 * @method static System|null import($data, Context $options = null)
 */
class System extends ClassStructure
{
    /** @var string|null Architecture of the system the agent is running on. */
    public $architecture;

    /** @var string|null Deprecated. Hostname of the system the agent is running on. Will be ignored if kubernetes information is set. */
    public $hostname;

    /** @var string|null Hostname of the host the monitored service is running on. It normally contains what the hostname command returns on the host machine. Will be ignored if kubernetes information is set, otherwise should always be set. */
    public $detectedHostname;

    /** @var string|null Name of the host the monitored service is running on. It should only be set when configured by the user. If empty, will be set to detected_hostname or derived from kubernetes information if provided. */
    public $configuredHostname;

    /** @var string|null Name of the system platform the agent is running on. */
    public $platform;

    /** @var Container */
    public $container;

    /** @var Kubernetes */
    public $kubernetes;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->architecture = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->architecture->description = "Architecture of the system the agent is running on.";
        $properties->architecture->maxLength = 1024;
        $properties->hostname = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->hostname->description = "Deprecated. Hostname of the system the agent is running on. Will be ignored if kubernetes information is set.";
        $properties->hostname->maxLength = 1024;
        $properties->detectedHostname = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->detectedHostname->description = "Hostname of the host the monitored service is running on. It normally contains what the hostname command returns on the host machine. Will be ignored if kubernetes information is set, otherwise should always be set.";
        $properties->detectedHostname->maxLength = 1024;
        $ownerSchema->addPropertyMapping('detected_hostname', self::names()->detectedHostname);
        $properties->configuredHostname = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->configuredHostname->description = "Name of the host the monitored service is running on. It should only be set when configured by the user. If empty, will be set to detected_hostname or derived from kubernetes information if provided.";
        $properties->configuredHostname->maxLength = 1024;
        $ownerSchema->addPropertyMapping('configured_hostname', self::names()->configuredHostname);
        $properties->platform = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->platform->description = "Name of the system platform the agent is running on.";
        $properties->platform->maxLength = 1024;
        $properties->container = Container::schema();
        $properties->kubernetes = Kubernetes::schema();
        $ownerSchema->type = array(
            0 => 'object',
            1 => 'null',
        );
        $ownerSchema->title = "System";
        $ownerSchema->setFromRef('system.json');
    }

    /**
     * @param string|null $architecture Architecture of the system the agent is running on.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setArchitecture($architecture)
    {
        $this->architecture = $architecture;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $hostname Deprecated. Hostname of the system the agent is running on. Will be ignored if kubernetes information is set.
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
     * @param string|null $detectedHostname Hostname of the host the monitored service is running on. It normally contains what the hostname command returns on the host machine. Will be ignored if kubernetes information is set, otherwise should always be set.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDetectedHostname($detectedHostname)
    {
        $this->detectedHostname = $detectedHostname;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $configuredHostname Name of the host the monitored service is running on. It should only be set when configured by the user. If empty, will be set to detected_hostname or derived from kubernetes information if provided.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setConfiguredHostname($configuredHostname)
    {
        $this->configuredHostname = $configuredHostname;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $platform Name of the system platform the agent is running on.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Container $container
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setContainer(Container $container)
    {
        $this->container = $container;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Kubernetes $kubernetes
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setKubernetes(Kubernetes $kubernetes)
    {
        $this->kubernetes = $kubernetes;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}