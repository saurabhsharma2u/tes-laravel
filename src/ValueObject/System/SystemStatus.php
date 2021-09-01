<?php

declare(strict_types=1);

namespace SaurabhSharma\TES\ValueObject\System;

class SystemStatus
{
    public function __construct(
        public int $upTime,
        public int $systemTime
    ) {
    }
}
