<?php 

$message = 'โค้ดที่ส่งไป';

    sendlinemesg();
   $res = notify_message($message);
    print_r($res);

function sendlinemesg() {
    define('HOST',"https://notify-api.line.me/api/notify");
    define('KEY',"D2Ps2VvpF2HYXfMqtOq4xnbsk6LHdIYXx0hWzvNVaKX");

    function notify_message($message) {
        $queryData = array('hcode' => $message);
        $queryData = http_build_query($queryData,'','&');
        
        $headerOptions = array(
            'http' => array(
                'method' => 'GET',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                                            //application/json
                            ."Authorization: Bearer ".KEY."\r\n"
                            ."Content-Length: ".strlen($queryData)."\r\n",
                'content' => $queryData
            )
        );
        $context = stream_context_create($headerOptions);
        $result = file_get_contents(HOST, FALSE, $context);
        $res = json_decode($result);
        return $res;
    }
}


?>