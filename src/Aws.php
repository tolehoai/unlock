<?php

namespace Tolehoai\Mvc;

class Aws implements Provider
{

    /**
     * @param $sms
     * @return string
     */
    public function sendSMS($sms): string
    {
       return "Send SMS from AWS Service: ". $sms;
    }
}
