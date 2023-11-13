<?php

namespace Casdoor\Tests;

use PHPUnit\Framework\TestCase;
use Casdoor\Auth\Jwt;
use Casdoor\Auth\Token;
use Casdoor\Auth\User;

class OauthTest
{
    public $code = "cc78dc9953ca6ae6ab58";
    public $state = "casdoor";

    public function __construct(){

    }


    public function initConfig()
    {
        $endpoint = 'http://127.0.0.1:8000';
        $clientId = '5ba66fc84fa1946c9b55';
        $clientSecret = 'a09ae018e9b562b7add5af8230d7921161fa853e';
        $certificate = file_get_contents(dirname(__FILE__) . '/public_key.pem');
        $organizationName = 'built-in';
        $applicationName = 'app-built-in';
        User::initConfig($endpoint, $clientId, $clientSecret, $certificate, $organizationName, $applicationName);
    }
    public function index()
    {
        var_dump("sda");
    }
}
