<?php
class Model{
    protected $PDO;
    public function __construct()
    {
        global $PDO;
        $this->PDO = $PDO;
        
    }
}