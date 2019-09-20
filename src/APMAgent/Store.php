<?php

namespace APMAgent;

use Iterator;

class Store
{
    protected $store = [];

    public function __construct(iterable $store = [])
    {
        $this->store = $store;
    }

    public function list() : array
    {
        return $this->store;
    }

    public function isEmpty() : bool
    {
        return empty($this->store);
    }

    public function reset()
    {
        $this->store = [];
    }

    public function register($event) : void
    {
//        $name = $event->getTransactionName();
//
//        // Do not override the
//        if (isset($this->store[$name]) === true) {
//            throw new DuplicateTransactionNameException($name);
//        }
        if(is_iterable($event)) {
            foreach($event as $item) {
                $this->store[] = $item;
            }

            return;
        }

        $this->store[] = $event;

//        $this->store[$name] = $event;
    }

//    public function fetch(string $name) : AbstractEvent
//    {
//        return $this->store[$name] ?? null;
//    }
    public function jsonSerialize() : string
    {
        return implode("\n", array_map(function($item) {
            $class = get_class($item);
            $data = call_user_func([$class, "export"], $item);
            return json_encode($data);
        }, $this->store));
    }
}
