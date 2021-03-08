<?php declare(strict_types=1);

namespace Tests;

use NorthArea\EventDispatcher\Event;
use NorthArea\EventDispatcher\EventDispatcher;
use NorthArea\EventDispatcher\ListenerProvider;
use PHPUnit\Framework\TestCase;

class EventDispatcherTest extends TestCase
{
    public function testMain(): void
    {
        $event = new Event();
        $listener = new TestListener();

        $provider = new ListenerProvider();
        $provider->addListener(Event::class, $listener);

        $dispatcher = new EventDispatcher($provider);

        self::assertFalse($listener->check);
        $dispatcher->dispatch($event);
        self::assertTrue($listener->check);
    }
}
