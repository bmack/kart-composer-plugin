<?php

namespace Bmack\CustomListeners\Listeners;

use Bmack\Kart\Examples\PayloadModificationEvent;

class PreRoutingListener
{
    public function preRouting(PayloadModificationEvent $event)
    {
        $event->setPayload(['OH YES, REFLECTED ON YOU']);
        return $event;
    }
}