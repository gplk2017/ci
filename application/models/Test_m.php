<?php

class Test_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $obj = new stdClass();
        $obj->info = 'Info';
        return $obj;
    }

    public function get2()
    {
        $obj = new Test_m();
        $obj->info = 'Info';
        return $obj;
    }

    public function e()
    {
        echo $this->info;
    }
}