<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Symfony\Component\HttpFoundation\Request;

class TrustProxies extends Middleware
{
    /**
     * De vertrouwde proxies voor deze applicatie.
     *
     * @var array<int, string>|string|null
     */
    protected $proxies = '*';

    /**
     * De headers die gebruikt moeten worden om de proxy te detecteren.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_FOR |
                         Request::HEADER_X_FORWARDED_HOST |
                         Request::HEADER_X_FORWARDED_PROTO |
                         Request::HEADER_X_FORWARDED_PORT;
}
