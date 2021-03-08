<?php


namespace Tests;


use NorthArea\EventDispatcher\Event;

class TestListener
{
    public bool $check = false;

    public function __invoke(Event $event)
    {
        $this->check = true;
    }
}