<?php

require_once('PHPUnit/Framework.php');

class Mapping_Test extends PHPUnit_Framework_TestCase {

    public function test_account_mapping_create()
    {
        Mapping::createTable();

        $obj = new Mapping();
        $obj->mission_hub_api_key = "123";
        $obj->mission_hub_role = "Leader";
        $obj->target_system = "MailChimp";
        $obj->target_system_api_key = "456";
        $obj->target_system_list = "MyList";
        $obj->save();

        $this->assertEquals(1, count(Mapping::all()));
    }
}