<?php
namespace App\Controller;

class ApiController 
{
    protected $curl;

    public function __construct()
    {
        $this->curl = curl_init();
    }

    public function callAPI($url)
    {
        curl_setopt($this->curl, CURLOPT_URL, $url);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        
        $json = curl_exec($this->curl);
        
        curl_close($this->curl);
        
        return json_decode($json); 
    }

}