<?php
require '../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Casdoor\Auth\Jwt;
use Casdoor\Auth\Token;
use Casdoor\Auth\User;

class OauthTest extends TestCase
{
    public function __construct()
    {
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
    public function testGetOauthToken($code, $state)
    {
        $token = new Token();
        var_dump("now");
        $accessToken = $token->getOAuthToken($code, $state);
        var_dump("hello");

        $this->assertIsString($accessToken->getToken());
        return $token;
    }

    public function index($code, $state)
    {
        var_dump("success------", $code, "hello", $state);
        $this->initConfig();
        $token = $this->testGetOauthToken($code, $state);
        // $jwt = new Jwt();
        // $result = $jwt->parseJwtToken($token, User::$authConfig);
        // var_dump($result);
    }
}
if (isset($_GET['code'])) {
    // Create an instance of the OauthTest class
    $oauthTest = new OauthTest();
    $code = $_GET['code'];
    $state = $_GET['state'];
    $oauthTest->index($code, $state);
}
