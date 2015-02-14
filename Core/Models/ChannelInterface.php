<?php
namespace BrightSkies\IrcBotPhp\Core\Models;

interface ChannelInterface
{
    /**
     * @param $channel
     * @return mixed
     */
    public function join($channel);
    public function listUsers();
}