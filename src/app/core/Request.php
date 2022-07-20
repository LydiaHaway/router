<?php
class Request
{
    private $url;

    public function __construct()
    {
        $this->_url = $_SERVER['REQUEST_URI'];
    }

    public function getUrl()
    {
        return $this->_url;
    }
}
