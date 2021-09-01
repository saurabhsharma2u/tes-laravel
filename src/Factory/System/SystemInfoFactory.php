<?php

declare(strict_types=1);

namespace SaurabhSharma\TES\Factory\System;

use SaurabhSharma\TES\ValueObject\System\SystemInfo;

class SystemInfoFactory
{
    public static function make(array $attributes): SystemInfo
    {
        return new SystemInfo(
            variant: $attributes['variant'],
            variantId: $attributes['variantId'],
            customerId: $attributes['customerId'],
            serialNumber: $attributes['serialNumber'],
            macAddr: $attributes['macAddr'],
            hwVersion: $attributes['hwVersion'],
            swVersion: $attributes['swVersion'],
            buildType: $attributes['buildType'],
            firmwarePackage:$attributes['firmwarePackage'],
            deviceName: $attributes['deviceName']
        );
    }
}
