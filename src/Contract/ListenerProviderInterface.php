<?php


namespace NorthArea\EventDispatcher\Contract;


interface ListenerProviderInterface extends \Psr\EventDispatcher\ListenerProviderInterface
{
    public function addListener(string $eventType, callable $callable): self;
}