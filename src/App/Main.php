<?php
namespace App;

class Main{

    private $service = [];

    private $config  = [];
    
    public function __construct(array $config = [] , array $service = [])
    {
        $this->config = $config;
        foreach ($service as $serviceName => $serviceInstance) {
            $this->service[$serviceName] = $serviceInstance;
        }
    }

    public function getService(string $serviceName)
    {
        if(isset($this->service[$serviceName])){
            return $this->service[$serviceName];
        }
    }

    public function getConfiguration()
    {
        return $this->config;
    }

    public function myMethod($param)
    {      
        return "Hello World!";
    }
}
