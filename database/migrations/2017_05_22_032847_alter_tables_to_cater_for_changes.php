<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTablesToCaterForChanges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // update sms table to include radio topic id
        Schema::table('sms', function (Blueprint $table) {
            $table->integer('radiotopic_id')->unsigned()->nullable();
            $table->string('message_id')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
        });

        // update the user table to include country and district
        Schema::table('users', function (Blueprint $table) {
            $table->string('country',60)->nullable();
            $table->string('district',60)->nullable();
        });

        //add audio file path to radio topic
        Schema::table('radio_topics', function (Blueprint $table) {
            $table->string('audio_url',60);
        });
     
        //add evidence to comment
        Schema::table('discussion_comments', function(Blueprint $table){
            $table->string('evidence_url')->nullable();
        });

        //Logging for bulk sms 
        Schema::create('bulk_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('message')->nullable();
            $table->text('recipients')->nullable();
            $table->timestamps();
        });

    }
 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
