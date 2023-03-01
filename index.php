<?php
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method');
header('Access-Control-Allow-Origin: *', true);
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Allow: GET, POST, OPTIONS');
header('Access-Control-Max-Age: 60');

if(isset($_POST['website_name']) and isset($_POST['default_key']) )
{
    $default_key = $_POST['default_key'];
    $website_name = $_POST['website_name'];

    function salt($website_name, $default_key)
    {
        $ciphering = "AES-256-CTR";
        $any_16_character_word = md5("passwordgenerator");
        $string_length = substr(md5($default_key.$website_name), 0, 16);
        $options = 2;
        $private_key = md5($default_key);
        $encryption = openssl_encrypt($website_name, $ciphering, $private_key, $options, $string_length);
        $encryption_length = strlen($encryption);
        if ($encryption_length < 16)
        {
            $encryption = substr($encryption.$string_length, 0, 16);
        }
        return $encryption;   
    }
    $password = salt($website_name, $default_key);
    $data = array
    (
        "Status"=>"200",
        "data"=>"$password"
    );
    $data = json_encode($data);
    echo $data;
}
else
{
    $data = array
    (
        "Status"=>"400",
        "data"=>"You sent a request this server does not understand"
    );
    $data = json_encode($data);
    echo $data; 
}
