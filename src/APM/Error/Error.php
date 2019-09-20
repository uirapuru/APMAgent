<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Error;

use APM\Error\All\Of1\IfClass;
use APM\Error\All\Of1\Then;
use APM\Error\All\Of2\IfClass as IfClass1;
use APM\Error\All\Of2\Then as Then1;
use APM\Error\All\Of3\IfClass as IfClass2;
use APM\Error\All\Of3\Then as Then2;
use APM\Error\Any\Of0 as Of01;
use APM\Error\Any\Of1 as Of11;
use APM\Error\Exception\Any\Of0;
use APM\Error\Exception\Any\Of1;
use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context as Context1;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * @method static Error import($data, Context1 $options = null)
 */
class Error extends ClassStructure
{
    /** @var string Hex encoded 128 random bits ID of the error. */
    public $id;

    /** @var string|null Hex encoded 128 random bits ID of the correlated trace. Must be present if transaction_id and parent_id are set. */
    public $traceId;

    /** @var string|null Hex encoded 64 random bits ID of the correlated transaction. Must be present if trace_id and parent_id are set. */
    public $transactionId;

    /** @var string|null Hex encoded 64 random bits ID of the parent transaction or span. Must be present if trace_id and transaction_id are set. */
    public $parentId;

    /** @var Transaction|null Data for correlating errors with transactions */
    public $transaction;

    /** @var Context|null Any arbitrary contextual information regarding the event, captured by the agent, optionally provided by the user */
    public $context;

    /** @var string|null Function call which was the primary perpetrator of this event. */
    public $culprit;

    /** @var Exception|Of0|Of1|null Information about the originally thrown error. */
    public $exception;

    /** @var Log|null Additional information added when logging the error. */
    public $log;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->id = (new Schema())->setType(array(
            0 => 'string',
        ));
        $properties->id->description = "Hex encoded 128 random bits ID of the error.";
        $properties->id->maxLength = 1024;
        $properties->traceId = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->traceId->description = "Hex encoded 128 random bits ID of the correlated trace. Must be present if transaction_id and parent_id are set.";
        $properties->traceId->maxLength = 1024;
        $ownerSchema->addPropertyMapping('trace_id', self::names()->traceId);
        $properties->transactionId = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->transactionId->description = "Hex encoded 64 random bits ID of the correlated transaction. Must be present if trace_id and parent_id are set.";
        $properties->transactionId->maxLength = 1024;
        $ownerSchema->addPropertyMapping('transaction_id', self::names()->transactionId);
        $properties->parentId = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->parentId->description = "Hex encoded 64 random bits ID of the parent transaction or span. Must be present if trace_id and transaction_id are set.";
        $properties->parentId->maxLength = 1024;
        $ownerSchema->addPropertyMapping('parent_id', self::names()->parentId);
        $properties->transaction = Transaction::schema();
        $properties->context = Context::schema();
        $properties->culprit = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->culprit->description = "Function call which was the primary perpetrator of this event.";
        $properties->culprit->maxLength = 1024;
        $properties->exception = Exception::schema();
        $properties->log = Log::schema();
        $ownerSchema->anyOf[0] = Of01::schema();
        $ownerSchema->anyOf[1] = Of11::schema();
        $ownerSchemaAllOf0 = new Schema();
        $ownerSchemaAllOf0->required = array(
            self::names()->id,
        );
        $ownerSchema->allOf[0] = $ownerSchemaAllOf0;
        $ownerSchemaAllOf1 = new Schema();
        $ownerSchemaAllOf1->if = IfClass::schema();
        $ownerSchemaAllOf1->then = Then::schema();
        $ownerSchema->allOf[1] = $ownerSchemaAllOf1;
        $ownerSchemaAllOf2 = new Schema();
        $ownerSchemaAllOf2->if = IfClass1::schema();
        $ownerSchemaAllOf2->then = Then1::schema();
        $ownerSchema->allOf[2] = $ownerSchemaAllOf2;
        $ownerSchemaAllOf3 = new Schema();
        $ownerSchemaAllOf3->if = IfClass2::schema();
        $ownerSchemaAllOf3->then = Then2::schema();
        $ownerSchema->allOf[3] = $ownerSchemaAllOf3;
    }

    /**
     * @param string $id Hex encoded 128 random bits ID of the error.
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
     * @param string|null $traceId Hex encoded 128 random bits ID of the correlated trace. Must be present if transaction_id and parent_id are set.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setTraceId($traceId)
    {
        $this->traceId = $traceId;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $transactionId Hex encoded 64 random bits ID of the correlated transaction. Must be present if trace_id and parent_id are set.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $parentId Hex encoded 64 random bits ID of the parent transaction or span. Must be present if trace_id and transaction_id are set.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Transaction|null $transaction Data for correlating errors with transactions
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Context|null $context Any arbitrary contextual information regarding the event, captured by the agent, optionally provided by the user
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setContext($context)
    {
        $this->context = $context;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $culprit Function call which was the primary perpetrator of this event.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCulprit($culprit)
    {
        $this->culprit = $culprit;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Exception|Of0|Of1|null $exception Information about the originally thrown error.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setException($exception)
    {
        $this->exception = $exception;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Log|null $log Additional information added when logging the error.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setLog($log)
    {
        $this->log = $log;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}