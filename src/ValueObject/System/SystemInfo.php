<?php

declare(strict_types=1);

namespace SaurabhSharma\TES\ValueObject\System;

class SystemInfo
{

    public function __construct(
        public string $variant,
        public int $variantId,
        public int $customerId,
        public string $serialNumber,
        public string $macAddr,
        public string $hwVersion,
        public string $swVersion,
        public string $buildType,
        public string $firmwarePackage,
        public string $deviceName
    ){}
}
