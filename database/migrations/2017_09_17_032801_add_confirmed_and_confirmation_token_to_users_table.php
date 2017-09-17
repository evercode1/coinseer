<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConfirmedAndConfirmationTokenToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {


            $table->boolean('confirmed')->default(false)->after('is_subscribed');

            $table->string('confirmation_token', 25)->nullable()->after('confirmed');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {

            $table->dropColumn('confirmed');
            $table->dropColumn('confirmation_token');

        });
    }
}
