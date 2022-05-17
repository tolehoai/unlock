<?php

namespace Tolehoai\Mvc\adapter;

class TranslatorAdapter implements VietnameseInterface
{
    private $adaptee;

    public function TranslatorAdapter($adaptee)
    {
        $this->adaptee = $adaptee;
    }

    /**
     * @param String $word
     * @return void
     */
    public function send($word)
    {
        echo "Recieve Vietnamese Word: " . $word;
        $japaneseWord = $this->translate($word);
        $this->adaptee->receive($$japaneseWord);
    }

    private function translate(string $vietnameseWord): string
    {
        echo "Translated!";
        return "Onichiwa";
    }
}