<?php

namespace Tolehoai\Mvc;

class User
{
    protected $provider;
    public function __construct(Provider $provider)
    {
        $this->provider=$provider;
    }
    public function send($sms)
    {
        $this->provider->sendSMS($sms);
    }
}
