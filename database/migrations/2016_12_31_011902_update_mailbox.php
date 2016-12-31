<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMailbox extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mailbox', function (Blueprint $table) {

            $table->timestamp("read_at")->nullable();
            $table->timestamp("archived_at")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mailbox', function (Blueprint $table) {
            $table->dropColumn(['read_at','archived_at']);
        });
    }
}
