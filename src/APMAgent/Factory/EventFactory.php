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


}