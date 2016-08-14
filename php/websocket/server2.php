<?php
error_reporting(E_ALL);
set_time_limit(0);
//ob_implicit_flush();
$address = '0.0.0.0';
$port = 8000;
//创建端口
if( ($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)) === false) {
    echo "socket_create() failed :reason:" . socket_strerror(socket_last_error()) . "\n";
}

//绑定
if (socket_bind($sock, $address, $port) === false) {
    echo "socket_bind() failed :reason:" . socket_strerror(socket_last_error($sock)) . "\n";
}

//监听
if (socket_listen($sock, 5) === false) {
    echo "socket_bind() failed :reason:" . socket_strerror(socket_last_error($sock)) . "\n";
}

/*if (($msgsock = socket_accept($sock)) === false) {
    echo "socket_accepty() failed :reason:".socket_strerror(socket_last_error($sock)) . "\n";
}*/

$hand = false;
$msgsock = '';

do {
    if (empty($msgsock)) {
        $msgsock = socket_accept($sock);
        echo $msgsock;
    } else {
        $len = socket_recv($msgsock, $buffer, 2048, 0);
        if ($len < 7) {
            socket_close($msgsock);
            echo 'out';
            break;
        }
        if (!$hand) {
            $hand = handshake($msgsock, $buffer);
        } else {
            socket_write($msgsock, $buffer, strlen($buffer));
        }
    }
} while(true);
socket_close($sock);

function handshake($k,$buffer){
    $buf  = substr($buffer,strpos($buffer,'Sec-WebSocket-Key:')+18);
    $key  = trim(substr($buf,0,strpos($buf,"\r\n")));
    $new_key = base64_encode(sha1($key."258EAFA5-E914-47DA-95CA-C5AB0DC85B11",true));
    $new_message = "HTTP/1.1 101 Switching Protocols\r\n";
    $new_message .= "Upgrade: websocket\r\n";
    $new_message .= "Sec-WebSocket-Version: 13\r\n";
    $new_message .= "Connection: Upgrade\r\n";
    $new_message .= "Sec-WebSocket-Accept: " . $new_key . "\r\n\r\n";
    socket_write($k,$new_message,strlen($new_message));
    return true;
}

//关闭socket
socket_close($sock);