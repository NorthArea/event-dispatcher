<?php declare(strict_types=1);

namespace Tests;

use NorthArea\EventDispatcher\Event;
use PHPUnit\Framework\TestCase;

class EventTest extends TestCase
{
    public function testStoppable(): void
    {
        $event = new Event();
        self::assertFalse($event->isPropagationStopped());
        $event->stopPropagation();
        self::assertTrue($event->isPropagationStopped());
    }

}
