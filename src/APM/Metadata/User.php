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
 * User
 * Built from user.json
 * @method static User|null import($data, Context $options = null)
 */
class User extends ClassStructure
{
    /** @var string|int|null Identifier of the logged in user, e.g. the primary key of the user */
    public $id;

    /** @var string|null Email of the logged in user */
    public $email;

    /** @var string|null The username of the logged in user */
    public $username;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->id = (new Schema())->setType(array(
            0 => 'string',
            1 => 'integer',
            2 => 'null',
        ));
        $properties->id->description = "Identifier of the logged in user, e.g. the primary key of the user";
        $properties->id->maxLength = 1024;
        $properties->email = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->email->description = "Email of the logged in user";
        $properties->email->maxLength = 1024;
        $properties->username = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->username->description = "The username of the logged in user";
        $properties->username->maxLength = 1024;
        $ownerSchema->type = array(
            0 => 'object',
            1 => 'null',
        );
        $ownerSchema->title = "User";
        $ownerSchema->setFromRef('user.json');
    }

    /**
     * @param string|int|null $id Identifier of the logged in user, e.g. the primary key of the user
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $email Email of the logged in user
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $username The username of the logged in user
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}