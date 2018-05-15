<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('new_id')->comment('新闻ID');
            $table->string('new_title',128)->nullable()->comment('新闻标题');
            $table->string('new_picture',128)->nullable()->comment('新闻封面');
            $table->longText('new_content')->nullable()->comment('新闻内容');
            $table->tinyInteger('new_type')->default(1)->comment('新闻类型');
            $table->integer('new_order')->default(0)->comment('新闻排序');
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
        Schema::dropIfExists('news');
    }
}
