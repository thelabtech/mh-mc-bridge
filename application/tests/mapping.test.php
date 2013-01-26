<?php

require_once('PHPUnit/Framework.php');

class Mapping_Test extends PHPUnit_Framework_TestCase {

    public function test_account_mapping_create()
    {
        Account_Mapping::createTable();

        $obj = new Account_Mapping();
        $obj->mission_hub_api_key = "123";
        $obj->target_system = "MailChimp";
        $obj->target_system_api_key = "456";
        $obj->save();

        $this->assertEquals(1, count(Account_Mapping::all()));
    }
}