<?php
namespace guduchango\ApiMagento2ExampleTests\tests;

class GetTokenTest extends BaseTest
{

    public function test_get_token()
    {
        $userData = array("username" => "foo", "password" => "secret");
        $ch = curl_init($this->getUrl("integration/admin/token"));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($userData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Content-Lenght: " . strlen(json_encode($userData))));
        $this->token = curl_exec($ch);
        $this->assertNotEmpty($this->token);
    }
}