<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->renameColumn('caption', 'caption_ru');
            $table->renameColumn('main_content', 'main_content_ru');
            $table->string('caption_ua', 255)->unique()->after('caption');
            $table->string('caption_en', 255)->unique()->after('caption_ua');
            $table->text('main_content_ua')->after('main_content');
            $table->text('main_content_en')->after('main_content_ua');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            //
        });
    }
}
