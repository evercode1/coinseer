<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddResourceTypeIdColunmToBlogResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blog_resources', function(Blueprint $table)
        {

            $table->integer('resource_type_id')->unsigned()->after('title');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blog_resources', function ($table) {

            $table->dropColumn('resource_type_id');

        });
    }
}
