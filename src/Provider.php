<?php

namespace Tolehoai\Mvc;

interface Provider
{
    /**
     * @param $sms
     * @return mixed
     */
    public function sendSMS($sms);
}
