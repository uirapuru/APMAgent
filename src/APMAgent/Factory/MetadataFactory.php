<?php

namespace APMAgent\Factory;

use APM\Metadata\Metadata;
use APM\Metadata\Process;
use APM\Metadata\Service;
use APM\Metadata\Service\Agent;
use APM\Metadata\Service\Language;
use APM\Metadata\System;
use APM\Metadata\System\Container;
use APM\Metadata\System\Kubernetes\Node;
use APM\Metadata\System\Kubernetes\Pod;

class MetadataFactory
{
    /** @var string */
    protected $name;

    /** @var Agent */
    protected $agent;

    /** @var Language */
    protected $language;

    /** @var Service\Framework */
    protected $framework;

    /** @var Process */
    private $process;

    /** @var System */
    private $system;

    /** @var System\Container */
    private $container;

    /** @var System\Kubernetes */
    private $kubernetes;

    public function __construct()
    {
        $this->name = "1234_service-12a3";
        $this->agent = (new Agent)->setName("elastic-node")->setVersion("3.14.0");
        $this->language = (new Language())->setName("php")->setVersion(PHP_VERSION);
        $this->framework = (new Service\Framework())->setName("symfony")->setVersion("4.3");
        $this->container = (new Container)->setId("container-id");
        $this->kubernetes = (new System\Kubernetes())
            ->setNamespace("namespace1")
            ->setPod((new Pod)->setName("pod-name")->setUid("pod-uid"))
            ->setNode((new Node)->setName("node-name"))
        ;

        $this->process = (new Process)
            ->setPid(getmypid())
        ;

        $this->service = (new Service)
            ->setName($this->name)
            ->setAgent($this->agent)
            ->setLanguage($this->language)
            ->setFramework($this->framework)
        ;

        $this->system = (new System)
            ->setContainer($this->container)
            ->setKubernetes($this->kubernetes)
        ;
    }

    public function fromJson(string $json) : Metadata
    {
        return Metadata::import(json_decode($json));
    }

    public function get() : Metadata
    {
        $metadata = new Metadata();

        $metadata->setProcess($this->process);
        $metadata->setService($this->service);
        $metadata->setSystem($this->system);

        return $metadata;
    }
}