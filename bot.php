<?php

// Load everything
include 'vendor/autoload.php';

use \BrightSkies\IrcBotPhp\Core\Connections\SocketConnection;
use \BrightSkies\IrcBotPhp\Core\Connections\IrcServerConnection;

// Include core config files
// $servers = Config::get('server');

// Loop servers creating new server connection
// $connections = [];
// foreach ($servers as $name => $details) {
//    $con = new IrcServerConnection(new SocketConnection($server['address'], $server['port']));
//    $con->nick = $server['nick'];
//    $con->pass = $server['pass'];
//    $con->username = $server['username'];
//    $con->hostname = $server['hostname'];
//    $con->servername = $server['servername'];
//    $con->realname = $server['realname'];
//    $con->connect();
//    $connections[] = $con;
// }

// the $con->connect() will start in a new thread.
// there will be a while loop that listens for incoming messages and parses it.
// Every time a message comes in from the server it will get parsed.
// If its a chat message (not a server message) it will be parsed differently
// Find all instances of ModuleInterface and call incomingData for all incoming data / messages
// Find all instances of ChatModuleInterface and call incomingMessage for all incoming messages


$botInfo = include('Config/Core/Bot.php');
$servers = include('Config/Core/Servers.php');
$quakenet = $servers['quakenet'];

$ircConnections['quakenet'] = new rcServerConnection(new SocketConnection($server['address'], $server['port']));

$ircConnections['quakenet']->connect();