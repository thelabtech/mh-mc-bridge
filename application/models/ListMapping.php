<?php

/**
 * Defines a mapping between a MissionHub role and a target system list.
 */
class ListMapping extends Eloquent
{
    public $mission_hub_role;
    public $target_system;
    public $target_system_list;

    public static function createTable() {

        Schema::create('listmappings', function($table) {
            $table->increments('id');
            $table->string('mission_hub_role');
            $table->string('target_system');
            $table->string('target_system_list');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->unique(array('mission_hub_role', 'target_system', 'target_system_list'));
        });
    }
}
