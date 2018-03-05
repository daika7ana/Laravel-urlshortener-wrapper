<?php

namespace Daika7ana\Shortenapi;

use App, Response;

class Shortenapi
{
    public $api_url, $long_url;

    public function __construct()
    {
        $this->api_url = config("shortenapi.api_url");
    }

    public function shorten($long_url)
    {
        $api_url = $this->api_url.'create_url';

        $data = array('url' => $long_url);

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );

        $context  = stream_context_create($options);
        $result = file_get_contents($api_url, false, $context);

        return $result;
    }

    public function expand($short_url)
    {
        $api_url = $this->api_url.'expand_url';
        $data = array('url' => $short_url);

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );

        $context  = stream_context_create($options);
        $result = file_get_contents($api_url, false, $context);

        return $result;
    }
}
