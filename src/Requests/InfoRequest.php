<?php

namespace SmartDato\HiveMq\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class InfoRequest extends Request
{
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::GET;

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/example';
    }
}
