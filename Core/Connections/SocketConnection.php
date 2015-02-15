<?php
namespace BrightSkies\IrcBotPhp\Core\Connections;
use BrightSkies\IrcBotPhp\Core\Models\ConnectorInterface;
use BrightSkies\IrcBotPhp\Core\Exceptions\ConnectionException;

class SocketConnection implements ConnectorInterface
{
    private $address;
    private $port;
    private $sock;

    /**
     * @return mixed
     */
    public function getSock()
    {
        return $this->sock;
    }

    /**
     * @param $address
     * @param $port
     */
    function __construct($address, $port)
    {
        $this->address = $address;
        $this->port = $port;
        return $this;
    }

    /**
     * @return $this
     * @throws ConnectionException
     */
    public function connect()
    {
        $this->sock = fsockopen($this->address, $this->port, $errNo, $errStr, 30);
        if (!$this->sock) {
            throw new ConnectionException($errStr);
        }
        return $this;
    }

    public function send($message)
    {
        fwrite($this->sock, $message."\r\n");
    }

    public function receive()
    {
        return fgets($this->sock, 128);
    }

}