<?php

class AuthController
{
    public function __construct()
    {
        $this->layout = 'base';
    }
    public function login()
    {
        echo 'login';
    }
    public function admin()
    {
        echo 'admin';
    }
}