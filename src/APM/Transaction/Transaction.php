<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace APM\Transaction;

use APM\Transaction\Span\Count;
use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class Transaction extends ClassStructure
{
    /** @var string Hex encoded 64 random bits ID of the transaction. */
    public $id;

    /** @var string Hex encoded 128 random bits ID of the correlated trace. */
    public $traceId;

    /** @var string|null Hex encoded 64 random bits ID of the parent transaction or span. Only root transactions of a trace do not have a parent_id, otherwise it needs to be set. */
    public $parentId;

    /** @var Count */
    public $spanCount;

    /** @var Context|null Any arbitrary contextual information regarding the event, captured by the agent, optionally provided by the user */
    public $context;

    /** @var float How long the transaction took to complete, in ms with 3 decimal points */
    public $duration;

    /** @var string|null The result of the transaction. For HTTP-related transactions, this should be the status code formatted like 'HTTP 2xx'. */
    public $result;

    /** @var float[]|null[][]|null[]|null A mark captures the timing of a significant event during the lifetime of a transaction. Marks are organized into groups and can be set by the user or the agent. */
    public $marks;

    /** @var bool|null Transactions that are 'sampled' will include all available information. Transactions that are not sampled will not have 'spans' or 'context'. Defaults to true. */
    public $sampled;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->id = Schema::string();
        $properties->id->description = "Hex encoded 64 random bits ID of the transaction.";
        $properties->id->maxLength = 1024;
        $properties->traceId = Schema::string();
        $properties->traceId->description = "Hex encoded 128 random bits ID of the correlated trace.";
        $properties->traceId->maxLength = 1024;
        $ownerSchema->addPropertyMapping('trace_id', self::names()->traceId);
        $properties->parentId = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->parentId->description = "Hex encoded 64 random bits ID of the parent transaction or span. Only root transactions of a trace do not have a parent_id, otherwise it needs to be set.";
        $properties->parentId->maxLength = 1024;
        $ownerSchema->addPropertyMapping('parent_id', self::names()->parentId);
        $properties->spanCount = Count::schema();
        $ownerSchema->addPropertyMapping('span_count', self::names()->spanCount);
        $properties->context = Context::schema();
        $properties->duration = Schema::number();
        $properties->duration->description = "How long the transaction took to complete, in ms with 3 decimal points";
        $properties->result = (new Schema())->setType(array(
            0 => 'string',
            1 => 'null',
        ));
        $properties->result->description = "The result of the transaction. For HTTP-related transactions, this should be the status code formatted like 'HTTP 2xx'.";
        $properties->result->maxLength = 1024;
        $properties->marks = (new Schema())->setType(array(
            0 => 'object',
            1 => 'null',
        ));
        $properties->marks->additionalProperties = false;
        $property19ce08 = (new Schema())->setType(array(
            0 => 'object',
            1 => 'null',
        ));
        $property19ce08->additionalProperties = false;
        $property19ce08 = (new Schema())->setType(array(
            0 => 'number',
            1 => 'null',
        ));
        $property19ce08->setPatternProperty('^[^.*"]*$', $property19ce08);
        $property19ce08->description = "A mark captures the timing in milliseconds of a significant event during the lifetime of a transaction. Every mark is a simple key value pair, where the value has to be a number, and can be set by the user or the agent.";
        $property19ce08->setFromRef('mark.json');
        $properties->marks->setPatternProperty('^[^.*"]*$', $property19ce08);
        $properties->marks->description = "A mark captures the timing of a significant event during the lifetime of a transaction. Marks are organized into groups and can be set by the user or the agent.";
        $properties->sampled = (new Schema())->setType(array(
            0 => 'boolean',
            1 => 'null',
        ));
        $properties->sampled->description = "Transactions that are 'sampled' will include all available information. Transactions that are not sampled will not have 'spans' or 'context'. Defaults to true.";
        $ownerSchema->required = array(
            self::names()->id,
            'trace_id',
            'span_count',
            self::names()->duration,
            self::names()->type,
        );
    }

    /**
     * @param string $id Hex encoded 64 random bits ID of the transaction.
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
     * @param string $traceId Hex encoded 128 random bits ID of the correlated trace.
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
     * @param string|null $parentId Hex encoded 64 random bits ID of the parent transaction or span. Only root transactions of a trace do not have a parent_id, otherwise it needs to be set.
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
     * @param Count $spanCount
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSpanCount(Count $spanCount)
    {
        $this->spanCount = $spanCount;
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
     * @param float $duration How long the transaction took to complete, in ms with 3 decimal points
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $result The result of the transaction. For HTTP-related transactions, this should be the status code formatted like 'HTTP 2xx'.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param float[]|null[][]|null[]|null $marks A mark captures the timing of a significant event during the lifetime of a transaction. Marks are organized into groups and can be set by the user or the agent.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMarks($marks)
    {
        $this->marks = $marks;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param bool|null $sampled Transactions that are 'sampled' will include all available information. Transactions that are not sampled will not have 'spans' or 'context'. Defaults to true.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSampled($sampled)
    {
        $this->sampled = $sampled;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}