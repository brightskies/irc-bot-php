<?php
namespace BrightSkies\IrcBotPhp\Core\Models;

interface ConnectorInterface
{
    public function send($message);
    public function receive();
}