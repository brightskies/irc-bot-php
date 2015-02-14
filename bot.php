<?php

include 'vendor/autoload.php';

$connection = new \BrightSkies\IrcBotPhp\Core\Models\SocketConnection("irc.quakenet.org", 6667);
$connection->connect()->send("USER BOT\r\n");
echo $connection->receive();