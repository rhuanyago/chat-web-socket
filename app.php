<?php

use WebSockets\Socket;
use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;

require 'vendor/autoload.php';

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Socket()
        )
    ),
    8080
);

$server->run();
