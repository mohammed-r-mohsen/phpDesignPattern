<?php 
include_once 'internet.php';
class realinternet implements internet {
    public function connectingto(string $serverHost)
    {
        echo "\nConnecting to " . $serverHost ; 
    }
}