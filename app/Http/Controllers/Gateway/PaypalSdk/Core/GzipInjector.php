<?php

namespace Hansal\Deposit\App\Http\Controllers\Gateway\PaypalSdk\Core;


use Hansal\Deposit\App\Http\Controllers\Gateway\PaypalSdk\PayPalHttp\Injector;

class GzipInjector implements Injector
{
    public function inject($httpRequest)
    {
        $httpRequest->headers["Accept-Encoding"] = "gzip";
    }
}
