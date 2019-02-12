<?php

function appenderListener(\Bmack\Kart\Examples\AppenderEvent $evt)
{
    $evt->append('Clousured');
    return $evt;
}