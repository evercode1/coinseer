<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugShortDescriptionEmbedCodeToBlogResourcesTable extends Migration
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

            $table->string('slug')->after('title');
            $table->string('author')->nullable()->after('slug');
            $table->string('description')->nullable()->after('slug');
            $table->string('embed_code')->nullable()->after('description');

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

            $table->dropColumn('slug');
            $table->dropColumn('author');
            $table->dropColumn('description');
            $table->dropColumn('embed_code');

        });
    }
}
