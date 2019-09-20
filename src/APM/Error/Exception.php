<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Error;

use APM\Error\Exception\Any\Of0;
use APM\Error\Exception\Any\Of1;
use APM\Error\Stacktrace\Frame;
use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Information about the originally thrown error.
 * @method static Exception|Of0|Of1|null import($data, Context $options = null)
 */
class Exception extends ClassStructure
{
    /** @var string|int|null The error code set when the error happened, e.g. database error code. */
    public $code;

    /** @var string|null The original error message. */
    public $message;

    /** @var string|null Describes the exception type's module namespace. */
    public $module;

    /** @var null */
    public $attributes;

    /** @var Frame[]|array|null */
    public $stacktrace;

    /** @var string|null */
    public $type;

    /** @var bool|null Indicator whether the error was caught somewhere in the code or not. */
    public $handled;

    /** @var null[]|array|null Exception tree */
    public $cause;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->code = (new Schema())->setType(array(
            0 => 'string',
            1 => 'integer',
            2 => 'null',
        ));
        $properties->code->description = "The error code set when the error happened, e.g. database error code.";
        $properties->code->maxLength = 1024;
        $properties->message = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->message->description = "The original error message.";
        $properties->module = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->module->description = "Describes the exception type's module namespace.";
        $properties->module->maxLength = 1024;
        $properties->attributes = (new Schema())->setType(array(
            0 => 'object',
            1 => 'null',
        ));
        $properties->stacktrace = (new Schema())->setType(array(
            0 => 'array',
            1 => 'null',
        ));
        $properties->stacktrace->items = Frame::schema();
        $properties->stacktrace->minItems = 0;
        $properties->type = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->type->maxLength = 1024;
        $properties->handled = (new Schema())->setType(array(
            0 => 'boolean',
            1 => 'null',
        ));
        $properties->handled->description = "Indicator whether the error was caught somewhere in the code or not.";
        $properties->cause = (new Schema())->setType(array(
            0 => 'array',
            1 => 'null',
        ));
        $properties->cause->items = (new Schema())->setType(array(
            0 => 'object',
            1 => 'null',
        ));
        $properties->cause->items->description = "Recursive exception object";
        $properties->cause->description = "Exception tree";
        $properties->cause->minItems = 0;
        $ownerSchema->type = array(
            0 => 'object',
            1 => 'null',
        );
        $ownerSchema->anyOf[0] = Of0::schema();
        $ownerSchema->anyOf[1] = Of1::schema();
        $ownerSchema->description = "Information about the originally thrown error.";
    }

    /**
     * @param string|int|null $code The error code set when the error happened, e.g. database error code.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $message The original error message.
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
     * @param string|null $module Describes the exception type's module namespace.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setModule($module)
    {
        $this->module = $module;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param null $attributes
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
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

    /**
     * @param string|null $type
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param bool|null $handled Indicator whether the error was caught somewhere in the code or not.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setHandled($handled)
    {
        $this->handled = $handled;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param null[]|array|null $cause Exception tree
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCause($cause)
    {
        $this->cause = $cause;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}