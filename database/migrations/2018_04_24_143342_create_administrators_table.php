<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrators', function (Blueprint $table) {
            $table->increments('admin_id')->comment('后台管理员ID');
            $table->string('admin_name',32)->unique()->comment('后台管理员用户名');
            $table->string('password')->comment('后台管理员密码');
            $table->tinyInteger('admin_status')->nullable()->comment('后台管理员状态');
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
        Schema::dropIfExists('administrators');
    }
}
