<?php

namespace Tolehoai\Mvc;

class User
{
    /**
     * @var Provider
     */
    protected $provider;
    public function __construct(Provider $provider)
    {
        $this->provider=$provider;
    }

    /**
     * @param $sms
     * @return void
     */
    public function send($sms): void
    {
        $this->provider->sendSMS($sms);
    }
}
