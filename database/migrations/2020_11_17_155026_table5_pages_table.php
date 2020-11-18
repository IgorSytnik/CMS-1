<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Table5PagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('caption_ru', 255)->nullable()->change();
            $table->string('caption_ua', 255)->nullable()->change();
            $table->string('caption_en', 255)->nullable()->change();
            $table->text('main_content_ru')->nullable()->change();
            $table->text('main_content_ua')->nullable()->change();
            $table->text('main_content_en')->nullable()->change();
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
