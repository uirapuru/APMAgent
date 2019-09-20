<?php

namespace APMAgent\Factory;

class EventFactory
{
    public static function metadata() : MetadataFactory
    {
        return new MetadataFactory();
    }

    public static function error() : ErrorFactory
    {
        return new ErrorFactory();
    }

    public static function span() : SpanFactory
    {
        return new SpanFactory();
    }

    public static function transaction() : TransactionFactory
    {
        return new TransactionFactory();
    }

    public static function metricset() : MetricsetFactory
    {
        return new MetricsetFactory();
    }

    public static function fromJson(string $json) : array
    {
        $events = explode(PHP_EOL, $json);
        $events = array_map("json_decode", $events/*, array_fill(0, count($events), JSON_OBJECT_AS_ARRAY)*/);

        $result = [];

        foreach($events as $event) {
            list($data, $class) = array(end($event), key($event));
//            $result[] = self::{$key}()->import($value);
            $result[] = call_user_func([sprintf("APM\\%s\\%s", $class, $class), "import"], $data);
        }

        return $result;
    }
}