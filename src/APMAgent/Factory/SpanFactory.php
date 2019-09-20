<?php

namespace APMAgent\Factory;

use APM\Span\Span;

class SpanFactory
{
    public function get() : Span
    {


        return $span;
    }
}