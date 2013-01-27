<?php

class Create_Mappings_Table {

	public function up()
	{
        Schema::create('mappings', function($table) {
            $table->increments('id');
            $table->string('mission_hub_api_key');
            $table->string('mission_hub_role');
            $table->string('target_system');
            $table->string('target_system_api_key');
            $table->string('target_system_list');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->unique(array('mission_hub_api_key', 'mission_hub_role', 'target_system_api_key', 'target_system_list'), 'binding');
        });
	}

	public function down()
	{
		Schema::drop('mappings');
	}

}