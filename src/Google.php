<?php

namespace Tolehoai\Mvc;

class Google implements Provider
{

    public function sendSMS($sms)
    {
       echo "Send SMS from Google Service: ". $sms;
    }
}
