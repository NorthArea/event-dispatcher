<?php


namespace NorthArea\EventDispatcher\Contract;


interface EventDispatcherInterface extends \Psr\EventDispatcher\EventDispatcherInterface
{
    public function __construct(ListenerProviderInterface $provider);
}