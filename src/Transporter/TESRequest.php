<?php

declare(strict_types=1);

namespace SaurabhSharma\TES\Transporter;

use JustSteveKing\Transporter\Request;


class TESRequest extends Request
{
    protected string $method='GET';
    protected string $baseUrl= '';

    public function authenticate():self
    {
        $this->request
            ->withDigestAuth('admin','hAe2dGKB')
            ->withOptions([
                'verify'=>false
            ]);


        return $this;
    }
}
