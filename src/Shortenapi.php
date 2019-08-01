<?php

namespace Daika7ana\Shortenapi;

class Shortenapi
{
    public $api_url, $long_url;

    public function __construct()
    {
        $this->api_url = rtrim(config("shortenapi.api_url"), '/').'/';
    }

    public function shorten($long_url)
    {
        $api_url = $this->api_url.'create_url';
        $data = array('url' => $long_url);

        return $this->make_api_call($api_url, $data);
    }

    public function expand($short_url)
    {
        $api_url = $this->api_url.'expand_url';
        $data = array('url' => $short_url);

        return $this->make_api_call($api_url, $data);
    }

    private function make_api_call(String $api_url, Array $data)
    {
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );

        $context  = stream_context_create($options);
        $result = file_get_contents($api_url, false, $context);

        return json_decode($result);
    }
}
