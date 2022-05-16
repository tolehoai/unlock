<?php

namespace Tolehoai\Mvc\adapter;

class TelegramSendMessage implements MessageInterface
{
    public string $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function sendMessage()
    {
        return "Message from Telegram: " . $this->message;
    }
}
