<?php

$socket = stream_socket_server("tcp://0.0.0.0:8000", $errno, $errstr);
if (!$socket) {
    echo "$errstr ($errno)<br />\n";
} else {
    while ($conn = @stream_socket_accept($socket)) {
        $message = fread($conn, 1024);
        echo 'i have received that : ' . $message;
        $message = json_decode($message, true);
        fwrite($conn, $message['function']($message['parameter']));
        fclose($conn);
    }
    fclose($socket);
}

function upstring($message)
{
    return strtoupper($message);
//    return "hehehehe";
}

function ucfirststring($message)
{
    return ucfirst($message);
//    return "hehehehe";
}
