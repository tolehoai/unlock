<?php

namespace Tolehoai\Mvc;

class Aws implements Provider
{

    public function sendSMS($sms)
    {
       echo "Send SMS from AWS Service: ". $sms;
    }
}