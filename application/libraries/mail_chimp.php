<?php

class MailChimp {
    
    public static function test_MailChimp()
    {
        $api = new MCAPI("802a9c43b17e0cd90419f9ae55c77423-us6");
        return $api->lists();
    }
}


?>
