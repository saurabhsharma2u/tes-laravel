<?php

declare(strict_types=1);

namespace SaurabhSharma\TES\Transporter\System;

use SaurabhSharma\TES\Transporter\TESRequest;

class InfoRequest extends TESRequest
{
    protected string $path = '/api/system/info';
}
