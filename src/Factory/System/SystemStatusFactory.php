<?php

namespace SaurabhSharma\TES\Factory\System;

use SaurabhSharma\TES\ValueObject\System\SystemStatus;

class SystemStatusFactory
{
    public static function make(array $attributes): SystemStatus
    {
        return new SystemStatus(
            upTime:$attributes['upTime'],
            systemTime: $attributes['systemTime']
        );
    }
}
