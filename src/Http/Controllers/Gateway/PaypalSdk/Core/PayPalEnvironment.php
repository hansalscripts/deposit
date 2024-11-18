<?php

namespace Hansal\Deposit\Http\Controllers\Gateway\PaypalSdk\Core;

use Hansal\Deposit\Http\Controllers\Gateway\PaypalSdk\PayPalHttp\Environment;

abstract class PayPalEnvironment implements Environment
{
    private $clientId;
    private $clientSecret;

    public function __construct($clientId, $clientSecret)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    public function authorizationString()
    {
        return base64_encode($this->clientId . ":" . $this->clientSecret);
    }
}

