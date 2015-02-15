<?php

include 'vendor/autoload.php';

use \BrightSkies\IrcBotPhp\Core\Connections\SocketConnection;
use \BrightSkies\IrcBotPhp\Core\Connections\IrcServerConnection;

$botInfo    = include('Config/Core/Bot.php');
$servers    = include('Config/Core/Servers.php');
$quakenet   = $servers['quakenet'];

$ircConnections['quakenet'] = IrcServerConnection(new SocketConnection($quakenet['address'], $quakenet['port']));

echo $ircConnections['quakenet']->connect();