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

    public function pongCommand($message)
    {
        $this->connection->send("PONG $message");
        return $this;
    }

    public function connect()
    {
        $this->connection->connect();
        $this->commandPass("randompassword");
        $this->commandNick("awesomebot");
        $this->commandUser("awesomebot", "hostname", "server", ":BOT");
        while(!feof($this->connection->getSock()))
        {
            var_dump($this->parse($this->connection->receive()));
        }
    }

    public function disconnect()
    {

    }

    public function parse($input)
    {
        $pattern = "/^(:(?<prefix>\S+) )?(?<command>\S+)( (?!:)(?<params>.+?))?( :(?<trail>.+))?$/";

        preg_match($pattern, $input, $matches);
        
        return [
            "prefix" => $matches["prefix"],
            "command" => $matches["command"],
            "params" => $matches["params"],
            "trail" => $matches["trail"]
        ];
    }

}