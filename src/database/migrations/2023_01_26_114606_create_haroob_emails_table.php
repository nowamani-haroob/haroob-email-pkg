<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('haroob_emails', function (Blueprint $table) {
            $table->id();
            $table->string("subject")->nullable();
            $table->string("sender")->nullable();
            $table->string("receiver")->nullable();
            $table->string("body")->nullable();
            $table->string("sent_message_id")->nullable();
            $table->string("response")->nullable();
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
        Schema::dropIfExists('haroob_emails');
    }
};
