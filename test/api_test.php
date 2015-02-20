<?php

// $domain = 'hoge.com';
define('HOST', 'localhost:3000');


$params = array(
);
var_dump(get_query($params));


function post_query($params)
{
    $data = http_build_query($params, "", "&");

//header
    $header = array(
        "Content-Type: application/x-www-form-urlencoded",
        "Content-Length: " . strlen($data)
    );

    $context = array(
        "http" => array(
            "method" => "POST",
            "header" => implode("\r\n", $header),
            "content" => $data
        )
    );
    return file_get_contents(HOST, false, stream_context_create($context));
}

function get_query($params = NULL)
{
    $data = '';
    if (isset($params)) {
        $data = http_build_query($params, "", "&");
    }
    echo $url = HOST . '/' . $data;

    return file_get_contents($url);
}
