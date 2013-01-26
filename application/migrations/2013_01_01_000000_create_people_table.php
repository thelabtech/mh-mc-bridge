<?php

class Create_People_Table {

	public function up()
	{
        Schema::create('people', function($table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_lame');
            $table->string('email_address');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->unique('email_address');
        });
	}

	public function down()
	{
        Schema::drop('people');
	}

}