<?php declare(strict_types=1);

namespace Tests;

use NorthArea\EventDispatcher\Event;
use NorthArea\EventDispatcher\ListenerProvider;
use PHPUnit\Framework\TestCase;

class ListenerProviderTest extends TestCase
{
    public function testMain(): void
    {
        $callback = static function (Event $event) {};
        $event = new Event();

        $provider = new ListenerProvider();
        $provider->addListener(Event::class, $callback);
        self::assertEquals($callback, $provider->getListenersForEvent($event)[0]);
    }

}
