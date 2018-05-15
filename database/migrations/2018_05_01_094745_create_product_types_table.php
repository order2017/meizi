<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_types', function (Blueprint $table) {
            $table->increments('product_type_id')->comment('产品分类ID');
            $table->string('product_type_name',45)->nullable()->comment('产品分类名称');
            $table->integer('product_type_pid')->default('0')->comment('产品分类父级ID');
            $table->string('product_type_path')->default('0,')->comment('产品所属级别分类路径ID');
            $table->tinyInteger('product_type_sort')->default('0')->comment('产品分类排序');
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
        Schema::dropIfExists('product_types');
    }
}
