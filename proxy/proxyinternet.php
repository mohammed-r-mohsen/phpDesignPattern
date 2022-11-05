<?php
include_once 'internet.php';
class proxyinternet implements internet
{

    private  $denied = array();
    public function __construct()
    {
        $denied[] = "abc.com";
        $denied[] = "def.com";
        $denied[] = "ijk.com";
        $denied[] = "lnm.com";
    }
    public function connectingto(string $serverHost)
    {
        $key =  array_search($serverHost, $this->denied, true);
        if ($key !== true)
            throw new Exception("\naccess deniend tto $serverHost");
        else
            echo "\nConnecting to " . $serverHost;
    }
}
