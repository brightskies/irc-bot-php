<?php

include 'vendor/autoload.php';

$botInfo    = include('Config/Core/Bot.php');
$servers    = include('Config/Core/Servers.php');
$quakenet   = $servers['quakenet'];

$connection = new \BrightSkies\IrcBotPhp\Core\Connections\SocketConnection($quakenet['address'], $quakenet['port']);

$connection->connect()->send("USER BOT\r\n");

echo $connection->receive();