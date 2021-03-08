<?php


namespace NorthArea\EventDispatcher\Contract;


use Psr\EventDispatcher\StoppableEventInterface;

interface Event extends StoppableEventInterface
{
    public function stopPropagation(): void;
}