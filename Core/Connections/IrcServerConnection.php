<?php
namespace BrightSkies\IrcBotPhp\Core\Connections;
use BrightSkies\IrcBotPhp\Core\Models\ConnectorInterface;

class IrcServerConnection
{
    private $connection;

    function __construct(ConnectorInterface $connection)
    {
        $this->connection = $connection;
        return $this;
    }

    public function commandPass($pass)
    {
        $this->connection->send("PASS $pass");
        return $this;
    }

    public function commandNick($nick)
    {
        $this->connection->send("NICK $nick");
        return $this;
    }

    public function commandUser($username, $hostname, $servername, $realname)
    {
        $this->connection->send("USER $username $hostname $servername $realname");
        return $this;
    }

    public function connect()
    {
//        $this->connection->connect()->send("USER BOT\r\n");

        /*while (!feof($this->connection)) {
            echo $this->connection->receive();
        }*/
    }

    public function disconnect()
    {

    }

}