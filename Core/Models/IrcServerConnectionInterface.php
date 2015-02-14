<?php
namespace BrightSkies\IrcBotPhp\Core\Models;

interface IrcServerConnectionInterface
{
    public function connect();
    public function disconnect();
}