<?php

declare(strict_types=1);

use SaurabhSharma\TES\TES;
use SaurabhSharma\TES\ValueObject\System\SystemInfo;
use SaurabhSharma\TES\ValueObject\System\SystemStatus;

it('can send api request and get system info', function () {
    expect(TES::System()->get_info())->toBeInstanceOf(SystemInfo::Class);
});

it('can send api request and get system status', function () {
    expect(TES::System()->get_status())->toBeInstanceOf(SystemStatus::Class);
});
