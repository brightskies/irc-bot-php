<?php
namespace BrightSkies\IrcBotPhp\Core\Models;

interface ConnectorInterface
{
    function __construct($address, $port);
    public function connect();
    public function send($message);
    public function receive();
}