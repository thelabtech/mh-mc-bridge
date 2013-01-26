<?php

class MailChimp {
    private static $_lists = null;

    public static function build_lists($api_key)
    {
        if (MailChimp::$_lists === null)
        {
            $api = new MCAPI($api_key);
            $object = $api->lists();
            $lists = $object['data'];
            MailChimp::$_lists = array();
            foreach ($lists as $list)
                MailChimp::$_lists[$list['id']] = $list['name'];
        }
        return MailChimp::$_lists;
    }
}