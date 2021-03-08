<?php


namespace NorthArea\EventDispatcher;



use NorthArea\EventDispatcher\Contract\ListenerProviderInterface;

class ListenerProvider implements ListenerProviderInterface
{

    private array $listeners;

    public function getListenersForEvent(object $event): iterable
    {
        $eventType = get_class($event);
        if (array_key_exists($eventType, $this->listeners)) {
            return $this->listeners[$eventType];
        }

        return [];
    }

    public function addListener(string $eventType, callable $callable): ListenerProviderInterface
    {
        $this->listeners[$eventType][] = $callable;
        return $this;
    }
}