<?php

namespace TamoJuno;

class Webhook extends Resource
{

    public function endpoint(): string
    {
        return 'notifications/webhooks';
    }
}
