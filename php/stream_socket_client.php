<?php
send_message('0.0.0.0', '8000', array('function' => 'ucfirststring', 'parameter' => 'hehe'));
//自定义函数，发送信息
function send_message($ipserver, $portserver, $message)
{
    $fp = stream_socket_client("tcp://$ipserver:$portserver", $errno, $errstr);
    if (!$fp) {
        echo "erreur : $errno - $errstr<br />n";
    } else {
        $message = json_encode($message);
        fwrite($fp, $message);
        $response = fread($fp, 1024);
        /*if ($response != "ok") {
            echo 'the command couldnt be executed...ncause :' . $response;
        } else {
            echo 'execution successfull...';
        }*/
        echo $response;
        fclose($fp);
    }
}
