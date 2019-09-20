<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Metadata;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Process
 * Built from process.json
 * @method static Process|null import($data, Context $options = null)
 */
class Process extends ClassStructure
{
    /** @var int Process ID of the service */
    public $pid;

    /** @var int|null Parent process ID of the service */
    public $ppid;

    /** @var string|null */
    public $title;

    /** @var string[]|array|null Command line arguments used to start this process */
    public $argv;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->pid = (new Schema())->setType(array(
            0 => 'integer',
        ));
        $properties->pid->description = "Process ID of the service";
        $properties->ppid = (new Schema())->setType(array(
            0 => 'integer',
            1 => 'null',
        ));
        $properties->ppid->description = "Parent process ID of the service";
        $properties->title = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->title->maxLength = 1024;
        $properties->argv = (new Schema())->setType(array(
            0 => 'array',
            1 => 'null',
        ));
        $properties->argv->items = Schema::string();
        $properties->argv->description = "Command line arguments used to start this process";
        $properties->argv->minItems = 0;
        $ownerSchema->type = array(
            0 => 'object',
            1 => 'null',
        );
        $ownerSchema->title = "Process";
        $ownerSchema->required = array(
            self::names()->pid,
        );
        $ownerSchema->setFromRef('process.json');
    }

    /**
     * @param int $pid Process ID of the service
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int|null $ppid Parent process ID of the service
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPpid($ppid)
    {
        $this->ppid = $ppid;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $title
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array|null $argv Command line arguments used to start this process
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setArgv($argv)
    {
        $this->argv = $argv;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}