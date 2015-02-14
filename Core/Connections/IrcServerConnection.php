<?php
namespace BrightSkies\IrcBotPhp\Core\Connections;
use BrightSkies\IrcBotPhp\Core\Models\ConnectorInterface;
use BrightSkies\IrcBotPhp\Core\Models\IrcServerConnectionInterface;

class IrcServerConnection implements IrcServerConnectionInterface
{
    private $connection;

    function __construct(ConnectorInterface $connection)
    {
        $this->connection = $connection;
        return $this;
    }

    public function connect()
    {
        $this->connection->connect()->send("USER BOT\r\n");

        /*while (!feof($this->connection)) {
            echo $this->connection->receive();
        }*/
    }

    public function disconnect()
    {

    }

}