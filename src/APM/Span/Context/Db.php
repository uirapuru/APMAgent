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
 * An object containing contextual data for database spans
 * @method static Db|null import($data, Context $options = null)
 */
class Db extends ClassStructure
{
    /** @var string|null Database instance name */
    public $instance;

    /** @var string|null Database link */
    public $link;

    /** @var string|null A database statement (e.g. query) for the given database type */
    public $statement;

    /** @var string|null Database type. For any SQL database, "sql". For others, the lower-case database category, e.g. "cassandra", "hbase", or "redis" */
    public $type;

    /** @var string|null Username for accessing database */
    public $user;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->instance = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->instance->description = "Database instance name";
        $properties->link = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->link->description = "Database link";
        $properties->link->maxLength = 1024;
        $properties->statement = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->statement->description = "A database statement (e.g. query) for the given database type";
        $properties->type = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->type->description = "Database type. For any SQL database, \"sql\". For others, the lower-case database category, e.g. \"cassandra\", \"hbase\", or \"redis\"";
        $properties->user = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->user->description = "Username for accessing database";
        $ownerSchema->type = array(
            0 => 'object',
            1 => 'null',
        );
        $ownerSchema->description = "An object containing contextual data for database spans";
    }
}