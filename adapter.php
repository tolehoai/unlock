<?php

use Tolehoai\Mvc\adapter\Japanses;
use Tolehoai\Mvc\adapter\TranslatorAdapter;

$client = new TranslatorAdapter(new Japanses());
$client->send("Xin chào");
