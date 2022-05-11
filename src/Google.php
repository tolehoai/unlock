<?php

namespace Tolehoai\Mvc;

class Google implements Provider
{

    /**
     * @param $sms
     * @return string
     */
    public function sendSMS($sms): string
    {
       return "Send SMS from Google Service: ". $sms;
    }
}
