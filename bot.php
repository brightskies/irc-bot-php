<?php

include 'vendor/autoload.php';

$botInfo    = include('Config/Core/Bot.php');
$servers    = include('Config/Core/Servers.php');
$quakenet   = $servers['quakenet'];

$connection = new \BrightSkies\IrcBotPhp\Core\Connections\SocketConnection($quakenet['address'], $quakenet['port']);

$connection->connect();

echo $connection->receive();