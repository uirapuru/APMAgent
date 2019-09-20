<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Error;

use APM\Error\Stacktrace\Frame;
use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Additional information added when logging the error.
 * @method static Log|null import($data, Context $options = null)
 */
class Log extends ClassStructure
{
    /** @var string|null The severity of the record. */
    public $level;

    /** @var string|null The name of the logger instance used. */
    public $loggerName;

    /** @var string The additionally logged error message. */
    public $message;

    /** @var string|null A parametrized message. E.g. 'Could not connect to %s'. The property message is still required, and should be equal to the param_message, but with placeholders replaced. In some situations the param_message is used to group errors together. The string is not interpreted, so feel free to use whichever placeholders makes sense in the client languange. */
    public $paramMessage;

    /** @var Frame[]|array|null */
    public $stacktrace;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->level = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->level->description = "The severity of the record.";
        $properties->level->maxLength = 1024;
        $properties->loggerName = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->loggerName->description = "The name of the logger instance used.";
        $properties->loggerName->default = "default";
        $properties->loggerName->maxLength = 1024;
        $ownerSchema->addPropertyMapping('logger_name', self::names()->loggerName);
        $properties->message = Schema::string();
        $properties->message->description = "The additionally logged error message.";
        $properties->paramMessage = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->paramMessage->description = "A parametrized message. E.g. 'Could not connect to %s'. The property message is still required, and should be equal to the param_message, but with placeholders replaced. In some situations the param_message is used to group errors together. The string is not interpreted, so feel free to use whichever placeholders makes sense in the client languange.";
        $properties->paramMessage->maxLength = 1024;
        $ownerSchema->addPropertyMapping('param_message', self::names()->paramMessage);
        $properties->stacktrace = (new Schema())->setType(array(
            0 => 'array',
            1 => 'null',
        ));
        $properties->stacktrace->items = Frame::schema();
        $properties->stacktrace->minItems = 0;
        $ownerSchema->type = array(
            0 => 'object',
            1 => 'null',
        );
        $ownerSchema->description = "Additional information added when logging the error.";
        $ownerSchema->required = array(
            self::names()->message,
        );
    }

    /**
     * @param string|null $level The severity of the record.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $loggerName The name of the logger instance used.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setLoggerName($loggerName)
    {
        $this->loggerName = $loggerName;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $message The additionally logged error message.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $paramMessage A parametrized message. E.g. 'Could not connect to %s'. The property message is still required, and should be equal to the param_message, but with placeholders replaced. In some situations the param_message is used to group errors together. The string is not interpreted, so feel free to use whichever placeholders makes sense in the client languange.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setParamMessage($paramMessage)
    {
        $this->paramMessage = $paramMessage;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Frame[]|array|null $stacktrace
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setStacktrace($stacktrace)
    {
        $this->stacktrace = $stacktrace;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}