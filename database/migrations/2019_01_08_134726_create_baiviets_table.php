<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaivietsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baiviets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenbv');
            $table->longtext('noidungbv');
            $table->string('duongdanbv');
            $table->string('linkanhmota');
            $table->integer('luotxem');
            
            $table->unsignedInteger('macm');
            $table->unsignedInteger('matv');
            $table->foreign('macm')->references('id')->on('chuyenmucs');
            $table->foreign('matv')->references('id')->on('users');
            $table->string('tomtatnoidung');
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
        Schema::dropIfExists('baiviets');
    }
}
