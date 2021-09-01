<?php

declare(strict_types=1);

namespace SaurabhSharma\TES\Resources;

use http\Exception;
use SaurabhSharma\TES\Factory\System\SystemInfoFactory;
use SaurabhSharma\TES\Factory\System\SystemStatusFactory;
use SaurabhSharma\TES\Transporter\System\InfoRequest;
use SaurabhSharma\TES\Transporter\System\StatusRequest;

class System
{
    /**
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function get_info()
    {
        $response = InfoRequest::build()
            ->authenticate()
            ->send();

        if ($response->failed()) {
            throw $response->toException();
        }

        return SystemInfoFactory::make(
            attributes: $response->json()['result']
        );
    }

    /**
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function get_status()
    {
        $response = StatusRequest::build()
            ->authenticate()
            ->send();

        if($response->failed()){
            throw $response->toException();
        }

        return SystemStatusFactory::make(
            attributes: $response->json()['result']
        );

    }


}
