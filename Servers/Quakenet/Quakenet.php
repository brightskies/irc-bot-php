<?php
namespace BrightSkies\IrcBotPhp\Servers\Quakenet;

interface Quakenet
{
    public function connect();
    public function disconnect();
}