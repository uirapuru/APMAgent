<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Span\Stacktrace;

use APM\Span\Stacktrace\Frame\Vars;
use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Stacktrace
 * A stacktrace frame, contains various bits (most optional) describing the context of the frame
 * Built from ../stacktrace_frame.json
 */
class Frame extends ClassStructure
{
    /** @var string|null The absolute path of the file involved in the stack frame */
    public $absPath;

    /** @var int|null Column number */
    public $colno;

    /** @var string|null The line of code part of the stack frame */
    public $contextLine;

    /** @var string The relative filename of the code involved in the stack frame, used e.g. to do error checksumming */
    public $filename;

    /** @var string|null The function involved in the stack frame */
    public $function;

    /** @var bool|null A boolean, indicating if this frame is from a library or user code */
    public $libraryFrame;

    /** @var int|null The line number of code part of the stack frame, used e.g. to do error checksumming */
    public $lineno;

    /** @var string|null The module to which frame belongs to */
    public $module;

    /** @var string[]|array|null The lines of code after the stack frame */
    public $postContext;

    /** @var string[]|array|null The lines of code before the stack frame */
    public $preContext;

    /** @var Vars|null Local variables for this stack frame */
    public $vars;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->absPath = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->absPath->description = "The absolute path of the file involved in the stack frame";
        $ownerSchema->addPropertyMapping('abs_path', self::names()->absPath);
        $properties->colno = (new Schema())->setType(array(
            0 => 'integer',
            1 => 'null',
        ));
        $properties->colno->description = "Column number";
        $properties->contextLine = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->contextLine->description = "The line of code part of the stack frame";
        $ownerSchema->addPropertyMapping('context_line', self::names()->contextLine);
        $properties->filename = Schema::string();
        $properties->filename->description = "The relative filename of the code involved in the stack frame, used e.g. to do error checksumming";
        $properties->function = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->function->description = "The function involved in the stack frame";
        $properties->libraryFrame = (new Schema())->setType(array(
            0 => 'boolean',
            1 => 'null',
        ));
        $properties->libraryFrame->description = "A boolean, indicating if this frame is from a library or user code";
        $ownerSchema->addPropertyMapping('library_frame', self::names()->libraryFrame);
        $properties->lineno = (new Schema())->setType(array(
            0 => 'integer',
            1 => 'null',
        ));
        $properties->lineno->description = "The line number of code part of the stack frame, used e.g. to do error checksumming";
        $properties->module = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->module->description = "The module to which frame belongs to";
        $properties->postContext = (new Schema())->setType(array(
            0 => 'array',
            1 => 'null',
        ));
        $properties->postContext->items = Schema::string();
        $properties->postContext->description = "The lines of code after the stack frame";
        $properties->postContext->minItems = 0;
        $ownerSchema->addPropertyMapping('post_context', self::names()->postContext);
        $properties->preContext = (new Schema())->setType(array(
            0 => 'array',
            1 => 'null',
        ));
        $properties->preContext->items = Schema::string();
        $properties->preContext->description = "The lines of code before the stack frame";
        $properties->preContext->minItems = 0;
        $ownerSchema->addPropertyMapping('pre_context', self::names()->preContext);
        $properties->vars = Vars::schema();
        $ownerSchema->type = 'object';
        $ownerSchema->title = "Stacktrace";
        $ownerSchema->description = "A stacktrace frame, contains various bits (most optional) describing the context of the frame";
        $ownerSchema->required = array(
            self::names()->filename,
        );
        $ownerSchema->setFromRef('../stacktrace_frame.json');
    }
}